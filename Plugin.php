<?php namespace Dmrch\Lgpd;

use Backend;
use System\Classes\PluginBase;

/**
 * Lgpd Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Lgpd',
            'description' => 'No description provided yet...',
            'author'      => 'Angelo Demarchi',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Dmrch\Lgpd\Components\Dialog' => 'lgpd',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dmrch.lgpd.some_permission' => [
                'tab' => 'Lgpd',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'LGPD',
                'description' => 'Manage LGPD settings.',
                'category'    => 'Geral',
                'icon'        => 'icon-cog',
                'class'       => 'Dmrch\Lgpd\Models\Settings',
                'order'       => 500,
                'permissions' => ['dmrch.lgpd.settings'],
            ]
        ];
    }
}
