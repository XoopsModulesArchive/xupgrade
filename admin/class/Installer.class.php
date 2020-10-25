<?php

/**
 * @version $Id: Installer.class.php,v 1.1.2.1.2.1 2007/04/27 04:18:01 minahito Exp $
 */
if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

require_once XOOPS_ROOT_PATH . '/modules/XUpgrade/admin/class/UpgradeProcessor.class.php';

class XUpgrade_Installer extends Legacy_ModuleInstaller
{
    public function _processScript()
    {
        $procedure = new XUpgrade_UpgradeProcessor(true);

        $procedure->execute($this->_mXoopsModule, $this->mLog);
    }
}
