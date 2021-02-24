<?php

use yii\db\Migration;

/**
 * Class m210224_021547_alter_column_on_book_table
 */
class m210224_021547_alter_column_on_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{book}}', 'resumo', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{book}}', 'resumo', $this->string());
    }
}
