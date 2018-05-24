<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course`.
 */
class m180524_071011_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'courseName'=>$this->String(50)->notNull(),
            'description'=>$this->String(200)->notNull(),
            'dept_id'=>$this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-course-dept_id',
            'course', 'dept_id');
        $this->addForeignKey(
            'fk-course-department',
            'course','dept_id',
            'department','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-course-department', 'course');
        $this->dropIndex('idx-course-dept_id', 'course');
        $this->dropTable('course');
    }
}
