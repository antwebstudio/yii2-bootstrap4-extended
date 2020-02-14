<?php
namespace ant\bootstrap4Extended;

class SassAsset extends \yii\web\AssetBundle {
	public $sourcePath = __DIR__ . '/sass';
	
    public $css = [
		'style.scss',
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
        '\rmrevin\yii\fontawesome\AssetBundle',
    ];
}