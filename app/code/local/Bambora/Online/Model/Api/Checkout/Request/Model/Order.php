<?php
/**
 * 888                             888
 * 888                             888
 * 88888b.   8888b.  88888b.d88b.  88888b.   .d88b.  888d888  8888b.
 * 888 "88b     "88b 888 "888 "88b 888 "88b d88""88b 888P"       "88b
 * 888  888 .d888888 888  888  888 888  888 888  888 888     .d888888
 * 888 d88P 888  888 888  888  888 888 d88P Y88..88P 888     888  888
 * 88888P"  "Y888888 888  888  888 88888P"   "Y88P"  888     "Y888888
 *
 * @category    Online Payment Gatway
 * @package     Bambora_Online
 * @author      Bambora Online
 * @copyright   Bambora (http://bambora.com)
 */
class Bambora_Online_Model_Api_Checkout_Request_Model_Order
{
    /**
     * @var Bambora_Online_Model_Api_Checkout_Request_Model_Address
     */
    public $billingaddress;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var Bambora_Online_Model_Api_Checkout_Request_Model_Line[]
     */
    public $lines;
    /**
     * @var string
     */
    public $ordernumber;
    /**
     * @var Bambora_Online_Model_Api_Checkout_Request_Model_Address
     */
    public $shippingaddress;
    /**
     * @var long
     */
    public $total;
    /**
     * @var long
     */
    public $vatamount;
}