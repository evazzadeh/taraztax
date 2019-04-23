<?php
/**
 * save logs in other database
 */

/**
@ In the name Of Allah
* The base configurations of the dashsample.
*/
self::$language =
[
	'default' => 'fa',
	'list'    => ['fa','en',],
];
/**
 * system default lanuage
 */
self::$config['site']['title']         = "شرکت حسابداری ترازسازان نفیس";
self::$config['site']['desc']          = "انجام امور مالیاتی";
self::$config['site']['slogan']        = "be relax with us in your tax problems!";

self::$config['debug']                 = true;
self::$config['enter']['force_verify'] = false;



self::$sms['kavenegar']['status'] = true;
self::$sms['kavenegar']['apikey'] = '44326537795238302B5342544364344E70426770507076752F6553544C674E66';
self::$sms['kavenegar']['debug']  = null;
self::$sms['kavenegar']['header'] = null;
self::$sms['kavenegar']['footer'] = 'TarazTax.ir';
self::$sms['kavenegar']['iran']   = null;
self::$sms['kavenegar']['line']   = '10006660066600';
self::$sms['kavenegar']['one']    = true;



self::$social['telegram']['status']     = true;
self::$social['telegram']['bot']        = 'TarazTaxBot';
self::$social['telegram']['hookFolder'] = 'HelloSupporter';
self::$social['telegram']['token']      = '677212024:AAHaGzycIDfCVBuPKXtJZqukuZqMlRA3CGY';
self::$social['telegram']['debug']      = true;






?>