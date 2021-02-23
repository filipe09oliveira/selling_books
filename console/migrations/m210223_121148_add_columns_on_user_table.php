<?php

use yii\db\Migration;

/**
 * Class m210223_121148_add_columns_on_user_table
 */
class m210223_121148_add_columns_on_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('{{%user}}', 'username', 'nome');
        $this->addColumn('{{%user}}', 'sobrenome', $this->string());
        $this->addColumn('{{%user}}', 'data_nascimento', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn('{{%user}}', 'nome', 'username');
        $this->dropColumn('{{%user}}', 'sobrenome');
        $this->dropColumn('{{%user}}', 'data_nascimento');
    }
}
