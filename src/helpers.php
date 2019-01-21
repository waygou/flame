<?php

use Waygou\Flame\Renderers\Panel;

function flame(...$args)
{
    return (new Panel($args))->makeView();
}

function getCalculatedPath($configPath)
{
    if (is_null($configPath)) {
        return;
    }

    if (gettype(app($configPath)) == 'object') {
        return app($configPath)();
    } else {
        return config("flame.groups.{$this->group}.path");
    }
}
