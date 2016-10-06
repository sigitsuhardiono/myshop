<?php

use yii\db\Migration;

class m161005_151543_create_tabel_barang extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%barang}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(20)->notNull()->unique(),
            'nama' => $this->string(100)->notNull(),
            'deskripsi' => $this->text(),
            'harga' => $this->integer(11),
            'diskon' => $this->integer()->defaultValue(0),
            'stok' => $this->integer()->defaultValue(0),
			'id_kategori' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
		$this->addForeignKey('kategoriFk', 'barang', 'id_kategori', 'kategori', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
		$this->dropForeignKey('kategoriFk');
		$this->dropTable('{{%barang}}');
    }
}
