<?php
// Example of how to inherit PHP ini settings from the Application to a module
namespace YourNameSpace;


class Module
{
    //... other functions here e.g. getAutoloaderConfig, getServiceConfig, getConfig
	
	
	//then add the  function below, which will be triggered by the EventManager
	//copied from http://www.zfdaily.com/2012/04/configuring-php-settings-in-zf2/
	//changed syntax to final release
	
	 public function onBootstrap(\Zend\Mvc\MvcEvent $e) {
        $app         = $e->getParam('application');
        $config      = $app->getConfig();
        $phpSettings = $config['phpSettings'];
        if($phpSettings) {
            foreach($phpSettings as $key => $value) {
                ini_set($key, $value);
            }
        }
    }
}
?>