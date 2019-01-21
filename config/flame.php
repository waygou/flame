<?php

use Waygou\Flame\PathFinders\FlamePathFinder;
use Waygou\Flame\PathFinders\ApplicationPathFinder;

return [

    'groups' => [
        /* Flame namespace groups.
            You need to specify your flame groups that you want to create features inside.
            Accepts 1 group key (namespace group) and 2 keys inside (namespace and path).

            '<namespace_group>' => [
                'namespace' => '<your feature namespace root>',
                'path' => '<the physical path to your feature namespace root>'
            ]

            As the one specified:
            'demo' => [
                'namespace' => 'Waygou\Flame\Features',
                'path'      => base_path('vendor/waygou/flame/src/Features')
            ]

            Means that Flame will autoload the demo namespace group, and load features from the
            namespace defined in that path.
            */

        'demo' => [
            'namespace' => 'Waygou\Flame\Features',
            'path'      => FlamePathFinder::class,
        ],

        /* Suggested namespace group for your Laravel app.
            It will create features in your Your/Application/Features folder.
            You need to replace the \Your\Application\Features to your base
            namespace where you want the Features to be created.
            You can then use the command:
            php artisan make:feature flame ManageCars (as example)! Have fun!
        */
        'flame' => [
            'namespace' => 'Your\Application\Features',
            'path'      => ApplicationPathFinder::class,
        ],
        /*****/
    ],

    /* Shows the demo route. You can put it false sp the /flame route path is not loaded. */
    'demo' => [
        'route' => true,
    ],
];
