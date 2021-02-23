<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ClientBook]].
 *
 * @see ClientBook
 */
class ClientBookQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return ClientBook[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return ClientBook|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
