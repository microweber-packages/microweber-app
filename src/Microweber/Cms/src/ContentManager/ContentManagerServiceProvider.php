<?php
/*
 * This file is part of the Microweber framework.
 *
 * (c) Microweber LTD
 *
 * For full license information see
 * http://Microweber.com/license/
 *
 */

namespace MicroweberPackages\ContentManager;

use Illuminate\Support\ServiceProvider;


class ContentManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @property \MicroweberPackages\ContentManager\Content    $content_manager
         */
        $this->app->singleton('content_manager', function ($app) {
            return new ContentManager();
        });

        /**
         * @property \MicroweberPackages\ContentManager\DataFieldsManager    $data_fields_manager
         */
        $this->app->singleton('data_fields_manager', function ($app) {
            return new DataFieldsManager();
        });

        /**
         * @property \MicroweberPackages\ContentManager\ArtributesManager    $attributes_manager
         */
        $this->app->singleton('attributes_manager', function ($app) {
            return new AttributesManager();
        });

        $this->loadMigrationsFrom(dirname(dirname(__DIR__)) . '/migrations/');
    }
}
