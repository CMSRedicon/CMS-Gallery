<?php

namespace Redicon\CMS_Gallery;
use Artisan;
use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        //tłumaczenia
        $this->loadTranslationsFrom(__DIR__.'/lang', 'CMS_Gallery_lang');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //kontrolery
        // $this->app->make('Redicon\CMS_Gallery\App\Http\Controllers\Admin\ArticlesController');
        // $this->app->make('Redicon\CMS_Gallery\App\Http\Controllers\Ajax\AjaxController');

        //widoki
        // $this->loadViewsFrom(__DIR__.'/views/admin/articles', 'admin_articles');
        // $this->loadViewsFrom(__DIR__.'/views/partials', 'CMS_Gallery_partials');
        // $this->loadViewsFrom(__DIR__.'/views/menu', 'CMS_Gallery_menu');

        //vendory
        // $this->publishes([
        //     __DIR__.'/views/admin/articles' => resource_path('views/vendor/admin/articles'),
        //     __DIR__.'/public/assets/output' => public_path('vendor/CMS_Gallery/assets'),
        //     __DIR__.'/public/assets/articles' => public_path('vendor/CMS_Gallery/articles'),
        // ], 'CMS_Gallery_vendors');
 
        //pliki artykułu - zdjęcie główne
        // $this->app->config['filesystem.disks.articles'] = array(
        //     'driver' => 'local',
        //     'root' => storage_path('articles')
        // );

    }
}
