<?php

namespace App\Helpers\Routes;

use App\Helpers\RecursiveDirectoryIterator;
use App\Helpers\RecursiveIteratorIterator;

class RoutesHelper
{
    public static function includeRouteFiles(string $folder)
    {
        $dirIterator = new \Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator($folder, \FilesystemIterator::KEY_AS_FILENAME);

        /** @var  \RecursiveDirectoryIterator | \RecursiveIteratorIterator $it */
        $it = new \RecursiveIteratorIterator($dirIterator);

        while($it->valid())
        {
            if(!$it->isDot() && $it->isFile() && $it->isReadable() && $it->current()->getExtension() === "php")
            {
                //require $it->key();
                require $it->current()->getPathname();
            }
            $it->next();
        }
    }
}
