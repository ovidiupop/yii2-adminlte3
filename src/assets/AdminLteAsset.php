<?php
namespace ovidiupop\adminlte3\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'ovidiupop\adminlte3\assets\BaseAsset',
        'ovidiupop\adminlte3\assets\PluginAsset'
    ];
}