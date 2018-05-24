<?php

use yii\db\Migration;

/**
 * Handles the creation of table `department`.
 */
class m180524_070946_create_department_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('department', [
            'id' => $this->primaryKey(),
            'departmentName' =>$this->String(50)->notNull(),
            'description' =>$this->String(200)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('department');
    }
}
