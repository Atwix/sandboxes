<?php
/**
 * @author Atwix Team
 * @copyright Copyright (c) 2016 Atwix (https://www.atwix.com/)
 * @package sandboxes
 */

require __DIR__ . '/app/bootstrap.php';

$bootstrap = \Magento\Framework\App\Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

/**
 * @var \Magento\Framework\App\State $appState
 */
$appState = $objectManager->get(\Magento\Framework\App\State::class);
$appState->setAreaCode("frontend");

/**
 * Test your stuffs here
 * @var \Magento\Sales\Api\OrderRepositoryInterface $orderRepo
 */
$orderRepo = $objectManager->create(\Magento\Sales\Api\OrderRepositoryInterface::class);
$order = $orderRepo->get(3);