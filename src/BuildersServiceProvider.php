<?php
/**
 * Created by PhpStorm.
 * User: Marco Asperti
 * Date: 24/08/2018
 * Time: 15:58
 */

namespace magutti\MaguttiBuilders;

use Illuminate\Support\ServiceProvider;

class BuildersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/magutti_builder.php' => config_path('magutti_builder.php'),
        ], 'magutti_builder-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/magutti_builder.php',
            'magutti_builder'
        );
    }
}