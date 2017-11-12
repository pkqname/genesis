<?php

use yii\db\Migration;

class m170306_083010_notes extends Migration
{

    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
		$tableOptions = null;
		//Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

		//Создание таблицы IP пользователей
		$this->createTable('{{%notes}}', [
			'id' => $this->primaryKey(),
			'text' => $this->string(255),
            'date' => $this->dateTime(),
            'date_change' => $this->dateTime()
		], $tableOptions);

    }

    public function safeDown()
    {
			$this->dropTable('{{%notes}}');
    }
}
