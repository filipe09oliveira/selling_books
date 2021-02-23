<?php

use console\migrations\base\Migration;

/**
 * Handles the creation of table `{{%log}}`.
 */
class m210223_025348_create_log_table extends Migration
{
    public function safeUp()
    {
        $this->createTable("{{%changelogs}}", [
            'id' => $this->primaryKey()->unsigned(),
            'relatedObjectType' => $this->string(191)->notNull(),
            'relatedObjectId' => $this->integer()->notNull(),
            'data' => $this->text(),
            'createdAt' => $this->integer(),
            'type' => $this->string(191)->null(),
            'userId' => $this->integer(),
            'hostname' => $this->string(191)
        ], $this->getDefaultTableOptions());

        $this->createIndex('IN_related_object_type', "{{%changelogs}}", 'relatedObjectType');
        $this->createIndex('IN_related_object_id', "{{%changelogs}}", 'relatedObjectId');
        $this->createIndex('IN_type', "{{%changelogs}}", 'type');
    }
    public function safeDown()
    {
        $this->dropTable("{{%changelogs}}");
    }
}
