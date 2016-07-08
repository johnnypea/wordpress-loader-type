<?php

namespace Webikon\Composer\Installer;

use Composer\Composer;
use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Installer\InstallerInterface;


class TemplateInstaller extends LibraryInstaller
{
    public function supports($packageType)
    {   
        return 'wordpress-loader' === $packageType;
    }
    
    public function getInstallPath(PackageInterface $package)
    {
        return 'wordpress/wp-content/mu-plugins';
    }
}
