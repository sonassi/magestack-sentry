<?php

/*
* @category    Module
* @package     MageStack_Sentry
* @copyright   Copyright (c) 2017 Sonassi
*/

class MageStack_Sentry_Model_ErrorHandler extends Mage_Core_Model_Abstract
{

    public function sentryCoreErrorHandler($errno, $errstr, $errfile, $errline)
    {
        Mage::getSingleton('magestack.sentry/client')->captureMessage($errstr, sprintf('In %s on line %d', $errfile, $errline));
    }

}