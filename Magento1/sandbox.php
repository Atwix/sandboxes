<?php
/**
 * @author Atwix Team
 * @copyright Copyright (c) 2016 Atwix (https://www.atwix.com/)
 * @package sandboxes
 */

require_once "app/Mage.php";

Mage::app();
umask(0);
ini_set('display_errors', 1);

// test your stuffs

$productModel = Mage::getModel("catalog/product");