<?php

use console\migrations\base\Migration;

/**
 * Handles the creation of table `{{%client_book}}`.
 */
class m210223_175644_create_client_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client_book}}', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(),
            'client_id' => $this->integer(),
        ], $this->getDefaultTableOptions());

        $this->addForeignKey('fk_client_book_book_id', '{{%client_book}}', 'book_id', '{{%book}}', 'id');
        $this->addForeignKey('fk_client_book_client_id', '{{%client_book}}', 'client_id', '{{%user}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client_book}}');
    }
}
