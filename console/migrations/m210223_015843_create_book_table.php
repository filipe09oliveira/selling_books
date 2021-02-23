<?php

use console\migrations\base\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m210223_015843_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(),
            'resumo' => $this->string(),
            'autor' => $this->string(),
            'edicao' => $this->string(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ], $this->getDefaultTableOptions());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%book}}');
    }
}
