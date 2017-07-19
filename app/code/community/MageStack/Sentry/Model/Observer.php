<?php

/*
* @category    Module
* @package     MageStack_Sentry
* @copyright   Copyright (c) 2017 Sonassi
*/

class MageStack_Sentry_Model_Observer extends Mage_Core_Model_Abstract
{

    /*
     * This will produce very verbose error messages
     */
    public function init()
    {
        // Mage::app()->setErrorHandler(array(Mage::getModel('magestack.sentry/errorHandler'), 'sentryCoreErrorHandler'));
    }

}