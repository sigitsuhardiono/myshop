<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle for bottom asset.
 */
class BottomAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
		'dev/js/vendor/jquery-1.12.0.min.js',
		'dev/js/bootstrap.min.js',
		'dev/js/owl.carousel.min.js',
		'dev/js/jquery-ui.min.js',
		'dev/lib/rs-plugin/js/jquery.themepunch.tools.min.js',
		'dev/lib/rs-plugin/js/jquery.themepunch.revolution.min.js',
		'dev/lib/rs-plugin/rs.home.js',
		'dev/js/jquery.meanmenu.js',
		'dev/js/wow.min.js',
		'dev/js/plugins.js',
		'dev/js/main.js',
		'dev/js/jquery.cookie.js',
    ];
	public $depends = [
        'frontend\assets\TopAsset'
    ];
}
