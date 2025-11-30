<?php
namespace Solidwork\ContaoSliderCaptchaBundle\Validator;
class SliderCaptchaValidator{
 public function validate(\Widget $widget){
  if($widget->type==='slider_captcha' && \Input::post($widget->name)!=='1'){
   $widget->addError('Bitte den Schieberegler vollständig betätigen.');
 }}}