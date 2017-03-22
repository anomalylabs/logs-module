<?php namespace Anomaly\LogsModule\Http\Controller\Admin;

use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class LogsController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class LogsController extends AdminController
{

    public function index()
    {
        return $this->view->make('streams::blank');
    }
}
