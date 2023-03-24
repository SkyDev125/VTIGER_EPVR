<?php
include_once 'vtlib/Vtiger/EventHandler.php';
include_once 'include/runtime/Request.php';

class EPVRCustomizationsHandler extends VTEventHandler
{
    public function handleEvent($eventName, $data)
    {
        if ($eventName == 'vtiger.header.afterload') {
            $request = new Vtiger_Request($_REQUEST, $_REQUEST);
            $moduleName = $request->getModule();

            if ($moduleName == 'Leads') {
                echo '<script type="text/javascript" src="layouts/vlayout/modules/EPVRCustomizations/custom.js"></script>';
            }
        }
    }
}
