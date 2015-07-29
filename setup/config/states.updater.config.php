<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

$base = basename($_SERVER['SCRIPT_FILENAME']);

return [
    'navUpdater' => [
        [
            'id'          => 'root',
            'step'        => 0,
            'views'       => ['root' => []],
        ],
        [
            'id'          => 'root.license',
            'url'         => 'license',
            'templateUrl' => "$base/license",
            'title'       => 'License',
            'main'        => true,
            'nav-bar'     => false,
            'order'       => -1,
        ],
        [
            'id'          => 'root.component-grid',
            'url'         => 'component-grid',
            'templateUrl' => "{$base}/component-grid",
            'title'       => "Component Grid",
            'controller'  => 'componentGridController',
            'nav-bar'     => false,
            'order'       => 1,
        ],
        [
            'id'          => 'root.readiness-check-updater',
            'url'         => 'readiness-check-updater',
            'templateUrl' => "{$base}/readiness-check-updater",
            'title'       => "Readiness \n Check",
            'header'      => 'Step 1: Readiness Check',
            'nav-bar'     => true,
            'order'       => 2,
        ],
        [
            'id'          => 'root.readiness-check-updater.progress',
            'url'         => 'readiness-check-updater/progress',
            'templateUrl' => "{$base}/readiness-check-updater/progress",
            'title'       => 'Readiness Check',
            'header'      => 'Step 1: Readiness Check',
            'controller'  => 'readinessCheckController',
            'nav-bar'     => false,
            'order'       => 3,
        ],
        [
            'id'          => 'root.create-backup',
            'url'         => 'create-backup',
            'templateUrl' => "{$base}/create-backup",
            'title'       => "Create \n Backup",
            'header'      => 'Step 2: Create Backup',
            'controller'  => 'createBackupController',
            'nav-bar'     => true,
            'validate'    => true,
            'order'       => 4,
        ],
        [
            'id'          => 'root.create-backup.progress',
            'url'         => 'create-backup/progress',
            'templateUrl' => "{$base}/complete-backup/progress",
            'title'       => "Create \n Backup",
            'header'      => 'Step 2: Create Backup',
            'controller'  => 'completeBackupController',
            'nav-bar'     => false,
            'order'       => 5,
        ],
        [
            'id'          => 'root.component-update',
            'url'         => 'component-update',
            'templateUrl' => "{$base}/component-update",
            'controller'  => 'componentUpdateController',
            'title'       => "Component \n Update",
            'header'      => 'Step 3: Component Update',
            'nav-bar'     => true,
            'order'       => 6,
        ],
        [
            'id'          => 'root.component-update-success',
            'url'         => 'component-update-success',
            'templateUrl' => "{$base}/component-update-success",
            'controller'  => 'componentUpdateSuccessController',
            'order'       => 7,
            'main'        => true
        ],
        [
            'id'          => 'root.home',
            'url'         => 'home',
            'templateUrl' => "$base/home",
            'title'       => 'Home',
            'header'       => 'Home',
            'default'     => true,
            'nav-bar'     => false,
            'order'       => -1,
        ],
        [
            'id'          => 'root.system-upgrade',
            'url'         => 'system-upgrade',
            'templateUrl' => "{$base}/system-upgrade",
            'title'       => 'Home',
            'controller'  => 'systemUpgradeController',
            'header'      => 'Step 1: Select Version',
            'order'       => 9,
            'nav-bar'     => true
        ]
    ]
];
