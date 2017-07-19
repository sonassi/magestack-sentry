<?php

/*
* @category    Module
* @package     MageStack_Sentry
* @copyright   Copyright (c) 2017 Sonassi
*/

class MageStack_Sentry_Model_Client extends Raven_Client
{

    function __construct()
    {
        parent::__construct(Mage::getStoreConfig('magestack.sentry/options/key'));
    }

}