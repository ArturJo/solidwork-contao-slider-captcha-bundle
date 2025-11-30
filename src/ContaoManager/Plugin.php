<?php
namespace Solidwork\ContaoSliderCaptchaBundle\ContaoManager;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Solidwork\ContaoSliderCaptchaBundle\SolidworkContaoSliderCaptchaBundle;
class Plugin implements BundlePluginInterface{
 public function getBundles(array $bundles){
  return [BundleConfig::create(SolidworkContaoSliderCaptchaBundle::class)->setLoadAfter([ContaoCoreBundle::class])];
 }}