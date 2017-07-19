Catch and send Magento exceptions to Sentry instance using the PHP Raven library, whilst still preserving normal Magento exception handling.

## Installation

 1. Download and extract the module

    ~~~~
    wget -O master.zip -no-check-certificate https://github.com/sonassi/magestack-sentry/archive/master.zip
    unzip master.zip
    rsync -vPa magestack-sentry*/app/ app/
    rsync -vPa magestack-sentry*/lib/ lib/
    rm -rf magestack-sentry* master.zip
    ~~~~

1. Log into your Magento admin and configure the DSN in `Admin > System > Config > MageStack > Sentry`

1. Copy `app/code/core/Mage/Core/Exception.php` to `app/code/local/Mage/Core/Exception.php`

   ~~~~
   cp app/code/core/Mage/Core/Exception.php app/code/local/Mage/Core/Exception.php
   ~~~~

1. Append the following to the end of the new `Exception.php` class,

   ~~~~
   /**
    * Additions by Sonassi to log exceptions with Sentry.
    *
    */
   public function __construct($message = '', $code = 0, $previous = null)
   {
       parent::__construct($message, $code, $previous);
       Mage::getSingleton('magestack.sentry/client')->captureException($this);
   }
   ~~~~