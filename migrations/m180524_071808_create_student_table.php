<?php

use yii\db\Migration;

/**
 * Handles the creation of table `student`.
 */
class m180524_071808_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student', [
            'id' => $this->primaryKey(),
            'name'=>$this->String(200)->notNull(),
            'gender'=>$this->String(4)->notNull(),
            'birthdate'=>$this->date()->notNull(),
            'course_id'=>$this->integer()->notNull(),
        ]);
        $this->createIndex(
            'idx-student-course_id',
            'student', 'course_id');
        $this->addForeignKey(
            'fk-student-course',
            'student','course_id',
            'course','id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-student-course', 'student');
        $this->dropIndex('idx-student-course_id', 'student');
        $this->dropTable('student');
    }
}
