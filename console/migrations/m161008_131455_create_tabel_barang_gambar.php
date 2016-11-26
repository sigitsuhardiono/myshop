<?php

use yii\db\Migration;

class m161008_131455_create_tabel_barang_gambar extends Migration
{
   public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%barang_gambar}}', [
            'id' => $this->primaryKey(),
            'gambar' => $this->string(100),
			'id_barang' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
		$this->addForeignKey('barangFk', 'barang_gambar', 'id_barang', 'barang', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
		$this->dropForeignKey('barangFk');
		$this->dropTable('{{%barang_gambar}}');
    }
}
