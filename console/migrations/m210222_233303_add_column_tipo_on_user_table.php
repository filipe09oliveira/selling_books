<?php

use console\migrations\base\Migration;

/**
 * Class m210222_233303_add_column_tipo_on_user_table
 */
class m210222_233303_add_column_tipo_on_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'tipo', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'tipo');
    }
}
