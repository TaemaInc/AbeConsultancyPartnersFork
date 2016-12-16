<?php namespace AbeConsultancy\Partners;

use Backend;
use System\Classes\PluginBase;

/**
 * Partners Plugin Information File
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
            'name'        => 'Partners',
            'description' => 'Adds the ability to add and show your partners.',
            'author'      => 'AbeConsultancy',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'AbeConsultancy\Partners\Components\PartnerOverview' => 'partnerOverview',
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'partners' => [
                'label'       => 'Partners',
                'url'         => Backend::url('abeconsultancy/partners/partners'),
                'icon'        => 'icon-leaf',
                'permissions' => ['abeconsultancy.partners.*'],
                'order'       => 500,
            ],
        ];
    }

}
