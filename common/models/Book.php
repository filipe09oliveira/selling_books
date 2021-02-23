<?php

namespace common\models;

use common\log\ChangeLogBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $resumo
 * @property string|null $autor
 * @property string|null $edicao
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Book extends \yii\db\ActiveRecord
{
    const AVENDA = 1;
    const VENDIDO = 2;

    public static function listStatus()
    {
        return [
            self::AVENDA => 'A venda',
            self::VENDIDO => 'Vendido',
        ];
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => ChangeLogBehavior::class,
                'excludedAttributes' => ['created_at', 'updated_at'],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['nome', 'resumo', 'autor', 'edicao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'resumo' => 'Resumo',
            'autor' => 'Autor',
            'edicao' => 'Edicao',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Deleted At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BookQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BookQuery(get_called_class());
    }
}
