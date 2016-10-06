<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle for top asset.
 */
class TopAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'dev/css/bootstrap.min.css',
        'dev/css/animate.css',
        'dev/css/jquery-ui.min.css',
        'dev/css/meanmenu.min.css',
        'dev/lib/rs-plugin/css/settings.css',
        'dev/css/owl.carousel.css',
        'dev/css/font-awesome.min.css',
        'dev/css/style.css',
        'dev/css/responsive.css',
        'dev/css/theme/color-01.css',
    ];
    public $js = [
		'dev/js/vendor/modernizr-2.8.3.min.js',
    ];
	public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
