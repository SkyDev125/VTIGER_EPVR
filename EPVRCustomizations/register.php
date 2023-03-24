<?php
include_once 'vtlib/Vtiger/Module.php';
include_once 'vtlib/Vtiger/EventHandler.php'; // Corrected the class name
include_once 'modules/Vtiger/helpers/Util.php';
include_once 'modules/EPVRCustomizations/EPVRCustomizationsHandler.php'; // Include the EPVRCustomizationsHandler class

$leadsModule = Vtiger_Module::getInstance('Leads');
$eventHandler = new Vtiger_Event_Handler();

$extensionHandler = new EPVRCustomizationsHandler();

$eventHandler->registerHandler('vtiger.header.afterload', $extensionHandler); // Updated the event name to match the one in EPVRCustomizationsHandler.php
