<?php
/**
 * Copyright © Lyra Network.
 * This file is part of Lyra PHP payment form example. See COPYING.md for license details.
 *
 * @author    Lyra Network <https://www.lyra.com>
 * @copyright Lyra Network
 * @license   http://www.apache.org/licenses/
 */

require_once implode(DIRECTORY_SEPARATOR, ['..', 'init.php']); // Loads the autoloader.

// Order Info.
$order_info = $_REQUEST;

// Module configuration parameters.
$paymentProcessor = new LyraPaymentProcessor();
$paymentProcessor->submitStandardPaymentForm($order_info);
