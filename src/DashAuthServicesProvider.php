<?php

    namespace ShawnSandy\DashAuth;

    use Illuminate\Support\ServiceProvider;
    use Silber\Bouncer\BouncerFacade;
    use Silber\Bouncer\BouncerServiceProvider;

    /**
     * Class Provider
     * @package ShawnSandy\DashAuth
     */
    class DashAuthServicesProvider extends ServiceProvider
    {

        /**
         * Perform post-registration booting of services.
         *
         * @return void
         */
        public function boot()
        {


            /**
             * Package views
             */
            $this->loadViewsFrom(__DIR__ . '/resources/views', 'dashauth');
            $this->publishes(
                [
                    __DIR__ . '/resources/views' => resource_path('views/vendor/dashauth'),
                ], 'dashauth-views'
            );

            /**
             * Package assets
             */
            $this->publishes(
                [
                    __DIR__ . '/resources/assets/js/' => public_path('assets/dashauth/js/'),
                    __DIR__ . '/public/assets/' => public_path('assets/')
                ], 'dashauth-assets'
            );

            /**
             * Package resources to resources
             */
            $this->publishes(
                [
                    __DIR__ . '/resources/assets/' => resource_path('assets/dashauth/'),
                ], 'dashauth-resources'
            );

            /**
             * Package config
             */
            $this->publishes(
                [__DIR__ . '/config/config.php' => config_path('dashauth.php')],
                'dashauth-config'
            );

            if (!$this->app->runningInConsole()) :
                include_once __DIR__ . '/Helpers/helper.php';
            endif;


        }

        /**
         * Register any package services.
         *
         * @return void
         */
        public function register()
        {

            $this->mergeConfigFrom(
                __DIR__ . '/config/config.php', 'dashauth'
            );

            $this->app->bind(
                'Dashauth', function () {
                return new DashAuth();
            }
            );

            $this->providers();
            $this->aliases();
        }

        public function providers()
        {
            $this->app->register(BouncerServiceProvider::class);
        }

        public function aliases()
        {
            /*
            * Load aliases / facades
            */
            $aliases = \Illuminate\Foundation\AliasLoader::getInstance();
            $aliases->alias("Bouncer", BouncerFacade::class);
        }


    }
