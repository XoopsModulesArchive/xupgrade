<?php

/**
 * @version $Id: Updater.class.php,v 1.1.2.1.2.1 2007/04/27 04:18:01 minahito Exp $
 */
if (!defined('XOOPS_ROOT_PATH')) {
    exit();
}

require_once XOOPS_ROOT_PATH . '/modules/XUpgrade/admin/class/UpgradeProcessor.class.php';

class XUpgrade_Updater extends Legacy_ModulePhasedUpgrader
{
    public function _processScript()
    {
        $procedure = new XUpgrade_UpgradeProcessor(false);

        $procedure->execute($this->_mTargetXoopsModule, $this->mLog);
    }
}
