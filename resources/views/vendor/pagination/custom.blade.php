@if ($paginator->hasPages())
    <div class="vs-pagination text-center mb-0 mt-4">
        <ul>
            {{-- Tombol Prev --}}
            @if ($paginator->onFirstPage())
                <li class="arrow disabled"><span><i class="fal fa-long-arrow-left"></i></span></li>
            @else
                <li class="arrow">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <i class="fal fa-long-arrow-left"></i>
                    </a>
                </li>
            @endif

            {{-- Nomor halaman --}}
            @foreach ($elements as $element)
                {{-- Separator "..." --}}
                @if (is_string($element))
                    <li><span>{{ $element }}</span></li>
                @endif

                {{-- Link halaman --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Tombol Next --}}
            @if ($paginator->hasMorePages())
                <li class="arrow">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <i class="fal fa-long-arrow-right"></i>
                    </a>
                </li>
            @else
                <li class="arrow disabled"><span><i class="fal fa-long-arrow-right"></i></span></li>
            @endif
        </ul>
    </div>
@endif
