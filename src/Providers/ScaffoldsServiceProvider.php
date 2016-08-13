<?php

namespace Inspheric\Scaffolds\Providers;

use Inspheric\Support\Providers\PackageServiceProvider;
use Inspheric\Scaffolds\Scaffold;

class ScaffoldsServiceProvider extends PackageServiceProvider
{
    protected $name = 'scaffolds';

    protected $namespace = 'Inspheric\Scaffolds\Http\Controllers';

    public function bindRoutes()
    {
        $this->bindModel('scaffolds', Scaffold::class);
    }

}
