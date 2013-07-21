<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

$className = 'postscript_tables_testplugin_002';

class postscript_tables_testplugin_002
{

    function postscript_testplugin_002()
    {

    }

    function execute_constructive($aParams=array())
    {
        $oManager = new OX_Plugin_ComponentGroupManager();
        $oManager->_logMessage('testPluginPackage 0.0.2 : '. get_class($this).' execute constructive');
        return true;
    }

    function execute_destructive($aParams=array())
    {
        $oManager = new OX_Plugin_ComponentGroupManager();
        $oManager->_logMessage('testPluginPackage 0.0.2 : '. get_class($this).' execute destructive');
        return true;
    }}

?>