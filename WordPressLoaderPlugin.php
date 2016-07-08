<?php

namespace Webikon\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Installer\LibraryInstaller;

class WordPressLoaderPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new LibraryInstaller($io, $composer, 'wordpress-loader');
        var_dump( $installer );
        exit;
        $composer->getInstallationManager()->addInstaller($installer);
    }
}