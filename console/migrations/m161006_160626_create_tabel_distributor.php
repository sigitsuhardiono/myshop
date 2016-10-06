<?php

use yii\db\Migration;

class m161006_160626_create_tabel_distributor extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%distributor}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(),
            'nama' => $this->string()->notNull(),
            'alamat' => $this->text(),
            'hp' => $this->string(),
            'email' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
		$this->dropTable('{{%distributor}}');
    }
}
