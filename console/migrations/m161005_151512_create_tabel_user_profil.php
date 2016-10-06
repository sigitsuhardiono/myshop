<?php

use yii\db\Migration;

class m161005_151512_create_tabel_user_profil extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_profil}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(),
            'alamat' => $this->text(),
            'email' =>$this->string(100),
            'hp' 	=> $this->string(13),
			'id_user' => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
		$this->addForeignKey('userFk', 'user_profil', 'id_user', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    public function safeDown()
    {
		$this->dropForeignKey('userFk');
		$this->dropTable('{{%user_profil}}');
    }
}
