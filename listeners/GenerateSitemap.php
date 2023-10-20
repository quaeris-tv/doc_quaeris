<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use samdark\sitemap\Sitemap;
use TightenCo\Jigsaw\Jigsaw;

class GenerateSitemap
{
    protected $exclude = [
        '/assets/*',
        '*/favicon.ico',
        '*/404'
    ];

    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');

        if (! $baseUrl) {
<<<<<<< HEAD
            echo "\nTo generate a sitemap.xml file, please specify a 'baseUrl' in config.php.\n\n";
=======
            echo("\nTo generate a sitemap.xml file, please specify a 'baseUrl' in config.php.\n\n");
>>>>>>> d28d06fbb86d8b75db16bd07dd2477ded44307e3

            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getOutputPaths())
            ->reject(function ($path) {
                return $this->isExcluded($path);
            })->each(function ($path) use ($baseUrl, $sitemap) {
                $sitemap->addItem(rtrim($baseUrl, '/') . $path, time(), Sitemap::DAILY);
<<<<<<< HEAD
            });
=======
        });
>>>>>>> d28d06fbb86d8b75db16bd07dd2477ded44307e3

        $sitemap->write();
    }

    public function isExcluded($path)
    {
        return Str::is($this->exclude, $path);
    }
}
