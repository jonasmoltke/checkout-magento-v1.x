<?php
/**
 * Copyright Bambora | Checkout, (c) 2016.
 * This program is free software. You are allowed to use the software but NOT allowed to modify the software. 
 * It is also not legal to do any changes to the software and distribute it in your own name / brand. 
 */
class Bambora_BamboraCheckout_Model_BamboraModels_BamboraCheckoutRequest extends Mage_Core_Model_Abstract
{
    public $capturemulti;
    public $customer; //BamboraCustommer
    public $instantcaptureamount;
    public $language;
    public $order; //bamboraOrder 
    public $url; //bamboraUrl
}