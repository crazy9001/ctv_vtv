<?php

namespace Botble\Admission;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Schema;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Schema::dropIfExists('admissions');
    }
}
