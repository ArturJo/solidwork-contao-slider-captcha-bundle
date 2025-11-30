<?php

namespace Solidwork\ContaoSliderCaptchaBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Solidwork\ContaoSliderCaptchaBundle\SolidworkContaoSliderCaptchaBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(SolidworkContaoSliderCaptchaBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}