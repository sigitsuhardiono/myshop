<?php

use yii\db\Migration;

class m161005_145609_create_tabel_kategori extends Migration
{
   public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%kategori}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string()->notNull()->unique(),
			'id_jenis' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
		$this->addForeignKey('jenisFk', 'kategori', 'id_jenis', 'jenis', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
		$this->dropForeignKey('jenisFk');
		$this->dropTable('{{%kategori}}');
    }
}
