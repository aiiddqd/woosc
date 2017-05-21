<?php
/*
Plugin Name: WooSC
Version: 0.1
Plugin URI: https://wpcraft.ru/product/woosc/
Description: WooCommerce Simple Checkout - remove some fields from checkout
Author: WPC
Author URI: https://wpcraft.ru/
*/

function woosc_checkout_fields($fields){

  unset($fields['billing']['billing_last_name']);
  unset($fields['billing']['billing_address_1']);
  unset($fields['billing']['billing_address_2']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_state']);

  unset($fields['shipping']['shipping_first_name']);
  unset($fields['shipping']['shipping_last_name']);
  unset($fields['shipping']['shipping_company']);
  unset($fields['shipping']['shipping_address_1']);
  unset($fields['shipping']['shipping_address_2']);
  unset($fields['shipping']['shipping_city']);
  unset($fields['shipping']['shipping_postcode']);
  unset($fields['shipping']['shipping_country']);
  unset($fields['shipping']['shipping_state']);

  $fields['billing']['billing_phone']['required'] = false;
  $fields['billing']['billing_first_name']['class'] = array('form-row-wide');

  return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'woosc_checkout_fields' );
