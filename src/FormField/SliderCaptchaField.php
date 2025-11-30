<?php

namespace Solidwork\ContaoSliderCaptchaBundle\FormField;

use Contao\Widget;

class SliderCaptchaField extends Widget
{
    protected $strTemplate = 'form_slider_captcha';
    protected $strFormFieldType = 'slider_captcha';

    public function validate()
    {
        $v = \Input::post($this->name);
        if ($v !== '1') {
            $this->addError('Bitte den Schieberegler vollständig nach rechts schieben.');
        }
    }

    public function generate()
    {
        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/solidworkcontaoslidercaptchabundle/slider-captcha/slider-captcha.js|static';
        $GLOBALS['TL_CSS'][] = 'bundles/solidworkcontaoslidercaptchabundle/slider-captcha/slider-captcha.css|static';

        // Render das Widget über das zugewiesene Contao-Template (inkl. Unterstützung für customTpl)
        return $this->parse();
    }
}