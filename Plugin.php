<?php namespace Vhiweb\Security;

use App, Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Security',
            'description' => 'No description provided yet...',
            'author' => 'Vhiweb',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        // Service provider
        App::register('\Spatie\Csp\CspServiceProvider');
        /**
            * $this->app[\Illuminate\Contracts\Http\Kernel::class]->prependMiddleware(\Vhiweb\Security\Middleware\HSTS::class);
            
            * \Backend\Classes\BackendController::extend(function($controller) {
            *     $controller->middleware(\Vhiweb\Security\Middleware\HSTS::class);
            * });

            * \Cms\Classes\CmsController::extend(function($controller) {
            *     $controller->middleware(\Vhiweb\Security\Middleware\HSTS::class);
            * });
        */
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'vhiweb.security.some_permission' => [
                'tab' => 'Security',
                'label' => 'Some permission'
            ],
        ];
    }
}
