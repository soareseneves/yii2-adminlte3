<?php

namespace soareseneves\adminlte3\assets;

use yii\web\AssetBundle;

class BaseAsset extends AssetBundle
{
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}