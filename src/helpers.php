<?php

use Waygou\Flame\Renderers\Panel;

function flame(...$args)
{
    return (new Panel($args))->makeView();
}
