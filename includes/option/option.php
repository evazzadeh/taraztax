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
self::$config['site']['title']         = "Taraz Tax";
self::$config['site']['desc']          = "Do your tax job in Iran";
self::$config['site']['slogan']        = "be relax with us in your tax problems!";

self::$config['debug']                 = true;
self::$config['enter']['force_verify'] = false;



self::$sms['kavenegar']['status']             = true;
self::$sms['kavenegar']['apikey']             = '44326537795238302B5342544364344E70426770507076752F6553544C674E66';
self::$sms['kavenegar']['header']             = null;
self::$sms['kavenegar']['footer']             = 'TarazTax.ir';


?>