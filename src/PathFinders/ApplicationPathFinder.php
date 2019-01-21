<?php

namespace Waygou\Flame\PathFinders;

class ApplicationPathFinder
{

    function __invoke()
    {
        return __DIR__ . '/../';

        return is_dir(base_path('vendor/waygou/flame/src/Features')) ?
                      base_path('vendor/waygou/flame/src/Features') :
                      base_path('packages/waygou/brunofalcao/src/Features');
    }
}
