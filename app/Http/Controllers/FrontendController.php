<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\OfferBanner;
use App\Models\BlogCategory;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Settings\GeneralSettings;
use App\Settings\HomePageSettings;

class FrontendController extends Controller
{
    public function home(HomePageSettings $settings)
    {
        $sliders = HomeSlider::where('status', true)
            ->orderBy('order')
            ->get();

        // Categories
        $categoriesQuery = Category::query()->withCount('products');;
        if (!$settings->categories_show_all) {
            $categoriesQuery->limit($settings->categories_limit);
        }
        $categories = $categoriesQuery->get();

        // Products
        $productsQuery = Product::query();
        if ($settings->products_display_mode === 'latest') {
            $productsQuery->latest();
        }
        // kalau nanti ada display mode lain, tambahkan logic di sini
        $products = $productsQuery->limit($settings->products_limit)->get();

        // Team
        $teams = Team::limit($settings->team_limit)->get();

        // What We Provide
        $provideItems = collect($settings->provide_items); 
        $total = $provideItems->count();
        $leftItems = $provideItems->take(ceil($total / 2));
        $rightItems = $provideItems->slice(ceil($total / 2));

        // Blogs/Posts
        $latestPosts = Post::with('category')
            ->latest('published_at')
            ->take(3)
            ->get();

        // Brands
        $brands = Brand::all();

        return view('home', [
            'sliders'    => $sliders,
            'settings'   => $settings,
            'categories' => $categories,
            'products'   => $products,
            'leftItems' => $leftItems,
            'rightItems' => $rightItems,
            'latestPosts'   => $latestPosts, 
            'teams'       => $teams,
            'brands' => $brands,
        ]);
    }
    public function about(GeneralSettings $generalSettings)
    {
        $about = About::firstOrCreate();
        return view('about', [
            'about' => $about,
            'generalSettings' => $generalSettings
        ]);
    }

    public function service(GeneralSettings $generalSettings)
    {
        $service = Service::firstOrCreate();
        return view('service', [
            'service' => $service,
            'generalSettings' => $generalSettings
        ]);
    }

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function blogByCategory(GeneralSettings $generalSettings, string $slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();

        // Ambil postingan yang terkait dengan kategori ini, dengan pagination
        $posts = $category->posts()->latest('published_at')->paginate(5);

        // Ambil data lain untuk sidebar
        $recentPosts = Post::latest('published_at')->take(3)->get();
        $categories = BlogCategory::withCount('posts')->get();
        $tags = Tag::all();

        return view('blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'generalSettings' => $generalSettings,
            'currentCategory' => $category, // Variabel tambahan untuk menandai kategori aktif
        ]);
    }

    public function blogByTag(GeneralSettings $generalSettings, string $slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        // Ambil postingan yang terkait dengan tag ini, dengan pagination
        $posts = $tag->posts()->latest('published_at')->paginate(5);

        // Ambil data lain untuk sidebar
        $recentPosts = Post::latest('published_at')->take(3)->get();
        $categories = BlogCategory::withCount('posts')->get();
        $tags = Tag::all();

        return view('blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'generalSettings' => $generalSettings,
            'currentTag' => $tag, // Variabel tambahan untuk menandai tag aktif
        ]);
    }

    public function blog(GeneralSettings $generalSettings)
    {
        // Ambil semua postingan, diurutkan dari yang terbaru, dengan pagination
        $posts = Post::with('category', 'tags')->latest('published_at')->paginate(5);

        // Ambil 3 postingan terbaru untuk widget sidebar
        $recentPosts = Post::latest('published_at')->take(3)->get();

        // Ambil semua kategori beserta jumlah postingan di setiap kategori
        $categories = BlogCategory::withCount('posts')->get();

        // Ambil semua tag
        $tags = Tag::all();
        
        return view('blog', [
            'posts' => $posts,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'generalSettings' => $generalSettings,
        ]);
    }

    public function blogDetails(GeneralSettings $generalSettings, string $slug)
    {
        // Temukan postingan berdasarkan slug, jika tidak ada, tampilkan 404
        $post = Post::where('slug', $slug)
            ->with(['category', 'tags'])
            ->firstOrFail();

        // Ambil 3 postingan terbaru kecuali postingan yang sedang ditampilkan
        $recentPosts = Post::where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();
        
        // Ambil semua kategori beserta jumlah postingan
        $categories = BlogCategory::withCount('posts')->get();
        
        // Ambil semua tag
        $tags = Tag::all();

        return view('blog-details', [
            'post' => $post,
            'recentPosts' => $recentPosts,
            'categories' => $categories,
            'tags' => $tags,
            'generalSettings' => $generalSettings,
        ]);
    }

    public function product(Request $request, GeneralSettings $generalSettings)
    {
        // Mulai query builder
        $query = Product::query();

        // Sorting
        $sort = $request->get('orderby', 'menu_order');
        switch ($sort) {
            case 'date':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('id', 'asc'); // Default
                break;
        }

        // Pagination (supaya query string ikut terbawa)
        $products = $query->paginate(8)->onEachSide(1)->appends($request->query());

        // Ambil 2 banner
        $deal1 = OfferBanner::first();
        $deal2 = OfferBanner::skip(1)->first();

        return view('product', [
            'products' => $products,
            'generalSettings' => $generalSettings,
            'deal1' => $deal1,
            'deal2' => $deal2,
        ]);
    }


    public function productByCategory(Request $request, GeneralSettings $generalSettings, string $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        // Mulai query builder dari relasi kategori
        $query = $category->products();

        // Sorting
        $sort = $request->get('orderby', 'menu_order');
        switch ($sort) {
            case 'date':
                $query->orderBy('created_at', 'desc');
                break;
            case 'price':
                $query->orderBy('price', 'asc');
                break;
            case 'price-desc':
                $query->orderBy('price', 'desc');
                break;
            default:
                $query->orderBy('id', 'asc'); // Default
                break;
        }

        // Pagination + query string ikut terbawa
        $products = $query->paginate(8)->onEachSide(1)->appends($request->query());

        // Ambil 2 banner
        $deal1 = OfferBanner::first();
        $deal2 = OfferBanner::skip(1)->first();

        return view('product', [
            'products' => $products,
            'generalSettings' => $generalSettings,
            'deal1' => $deal1,
            'deal2' => $deal2,
            'currentCategory' => $category,
        ]);
    }



    public function productDetails(GeneralSettings $generalSettings, string $slug)
    {
        $product = Product::where('slug', $slug)
            ->with('category')
            ->firstOrFail();

        // Anda bisa menambahkan logika untuk 'related products' di sini jika diperlukan
        $relatedProducts = Product::where('id', '!=', $product->id)
            ->where('category_id', $product->category_id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('product-details', [
            'product' => $product,
            'generalSettings' => $generalSettings,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function project()
    {
        return view('project');
    }

    public function projectDetails()
    {
        return view('project-details');
    }

    public function teamDetails()
    {
        return view('team-details');
    }
}
