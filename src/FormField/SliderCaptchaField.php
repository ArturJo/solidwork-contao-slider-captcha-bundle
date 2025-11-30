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


        return sprintf('<input type="hidden" name="%s" id="%s" value="0">
  <div class="sw-slider-captcha-track" data-slider-track>
   <div class="sw-slider-captcha-handle" data-slider-handle></div>
  </div>', $this->name, $this->name);
    }
}