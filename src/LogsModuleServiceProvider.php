<?php namespace Anomaly\LogsModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class LogsModuleServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogsModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/logs' => 'Anomaly\LogsModule\Http\Controller\Admin\LogsController@index',
    ];

}
