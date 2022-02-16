<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m220207_132518_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            's_name' => $this->string()->notNull()->unique(),
            'class' => $this->integer(),
            's_roll_number' => $this->integer(11)->unique(),
            's_address' => $this->string(),
            'country_id' => $this->integer(12),
            'state_id' => $this->integer(12),
            'district_id' => $this->integer(12),
            'taluk_id' => $this->integer(12),
            'created_at' => $this->timestamp()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            //'updated_at' =>  $this->timestamp()->null()->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
