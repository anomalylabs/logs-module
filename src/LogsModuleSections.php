<?php namespace Anomaly\LogsModule;

use Anomaly\Streams\Platform\Ui\ControlPanel\ControlPanelBuilder;

class LogsModuleSections
{

    public function handle(ControlPanelBuilder $builder)
    {
        $builder->setSections(
            [
                'logs',
            ]
        );
    }
}
