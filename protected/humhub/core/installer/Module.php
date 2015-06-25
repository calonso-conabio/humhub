<?php

/**
 * HumHub
 * Copyright © 2014 The HumHub Project
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 */

namespace humhub\core\installer;

use Yii;

/**
 * InstallerModule provides an web installation interface for the applcation
 *
 * @package humhub.modules_core.installer
 * @since 0.5
 */
class Module extends \yii\base\Module
{

    public $controllerNamespace = 'humhub\core\installer\controllers';

    public function init()
    {
        $this->layout = '@humhub/core/installer/views/layouts/main.php';
    }

    /**
     * Checks if database connections works
     *
     * @return boolean
     */
    public function checkDBConnection()
    {
        try {
            // call setActive with true to open connection.
            Yii::$app->db->open();
            // return the current connection state.
            return Yii::$app->db->getIsActive();
        } catch (Exception $e) {
            
        }

        return false;
    }

    /**
     * Checks if the application is already configured.
     */
    public function isConfigured()
    {
        if (\humhub\models\Setting::Get('secret') != "") {
            return true;
        }
        return false;
    }

    /**
     * Sets application in installed state (disables installer)
     */
    public function setInstalled()
    {
        $config = \humhub\libs\DynamicConfig::load();
        $config['params']['installed'] = true;
        \humhub\libs\DynamicConfig::save($config);
    }

}