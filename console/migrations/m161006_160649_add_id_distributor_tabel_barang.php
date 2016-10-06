<?php

use yii\db\Migration;

class m161006_160649_add_id_distributor_tabel_barang extends Migration
{
    public function safeUp()
    {
      $this->addColumn('barang', 'id_distributor', $this->integer()->after('id_kategori'));  
	  $this->addForeignKey('distributorFk', 'barang', 'id_distributor', 'distributor', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
		$this->dropForeignKey('distributorFk');
		$this->dropColumn('barang', 'id_distributor');  
    }
}
