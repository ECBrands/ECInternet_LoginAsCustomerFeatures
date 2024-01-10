<?php
/**
 * Copyright (C) EC Brands Corporation - All Rights Reserved
 * Contact Licensing@ECInternet.com for use guidelines
 */
declare(strict_types=1);

namespace ECInternet\LoginAsCustomerFeatures\Plugin\Magento\LoginAsCustomerAssistance\Model\ResourceModel;

use Magento\LoginAsCustomerAssistance\Model\ResourceModel\GetLoginAsCustomerAssistanceAllowed;

/**
 * Plugin for Magento\LoginAsCustomerAssistance\Model\ResourceModel\GetLoginAsCustomerAssistanceAllowed
 */
class GetLoginAsCustomerAssistanceAllowedPlugin
{
    public function afterExecute(
        /** @noinspection PhpUnusedParameterInspection */ GetLoginAsCustomerAssistanceAllowed $subject,
        $result
    ) {
        return true;
    }
}
