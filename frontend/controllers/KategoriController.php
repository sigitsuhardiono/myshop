<?php

namespace frontend\controllers;
use common\models\Barang;
use yii\data\Pagination;
class KategoriController extends \yii\web\Controller
{
    public function actionIndex($nama)
    {
        $Barang = new Barang();
        $query =  $Barang->GetBarangByKategori();
	    $countQuery = clone $query;
	    $pages = new Pagination(['totalCount' => $countQuery->count()]);
		$pages->route = 'kategori/';
		$pages->setPageSize(9);
	    $BarangKategori = $query->offset($pages->offset)
	        ->limit($pages->limit)
	        ->all();
	    return $this->render('index', [
	         'BarangKategori' => $BarangKategori,
	         'pages' => $pages,
	    ]);
	}

}
