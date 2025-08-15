<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.ceo_name', null);
        $this->migrator->add('general.ceo_designation', null);
        $this->migrator->add('general.ceo_photo', null);
        $this->migrator->add('general.ceo_signature', null);
        $this->migrator->add('general.working_hours', []);
    }
};
