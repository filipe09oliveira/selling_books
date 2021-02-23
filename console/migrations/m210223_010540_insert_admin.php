<?php

use console\migrations\base\Migration;

/**
 * Class m210222_233536_insert_user_admin
 */
class m210223_010540_insert_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert("{{%admin}}", ['nome', 'password_hash', 'email', 'status'],
            [
                ['Administrador', '$2y$13$CtMwL7uelVz62gg8GEMIUO8.I8.qLkPPt64Y60IBTr6vgjai02hvy', 'admin@mail.com', 10],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%admin}}');
    }
}
