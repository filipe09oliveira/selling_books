<?php

namespace common\log;

use common\models\Admin;
use common\models\User;
use yii\behaviors\TimestampBehavior;
use yii\console\Application;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "log_event".
 *
 * @property integer $id
 * @property string $relatedObjectType
 * @property integer $relatedObjectId
 * @property integer $from
 * @property string $data
 * @property string $createdAt
 * @property string $type
 * @property integer $userId
 * @property integer $userName
 * @property \yii\db\ActiveQuery $user
 * @property string $hostname
 *
 * example of log event creation:
 *          $model =    $this->findModel($id);
 *          $event = new Event;
 *          $event->type  = 'user_view';
 *          $event->relatedObject = $model;
 *          $event->save(false);
 */
class LogItem extends ActiveRecord
{

    public function getUserName()
    {

        $model =  $this->from == self::listFrom()['backend'] ? $this->hasOne(Admin::className(), ['id' => 'userId']) : $this->hasOne(User::className(), ['id' => 'userId']);
        return $model->one()->nome;
    }
    /**
     * @var ActiveRecord
     */
    public $relatedObject;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%changelogs}}';
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => false,
            ],
        ];
    }

    public static function listFrom()
    {
        return [
            'backend' => 1,
            'frontend' => 2,
            'console' => 3,
            'api' => 4,
        ];
    }

    public static function listFromLabel()
    {
        return [
            1 => 'backend',
            2 => 'frontend',
            3 => 'console',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['relatedObjectId', 'userId'], 'integer'],
            //[['data'], 'string'],
            [['createdAt', 'relatedObject', 'data'], 'safe'],
            [['relatedObjectType', 'type', 'hostname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'relatedObjectType' => 'Tipo de Objeto',
            'relatedObjectId' => 'Id do Objeto',
            'data' => 'Data',
            'createdAt' => 'modificado em',
            'type' => 'Ação',
            'userId' => 'ID Usuário',
            'hostname' => 'IP',
        ];
    }

    /**
     * @param bool $insert
     *
     * @return bool
     * @throws \ReflectionException
     */
    public function beforeSave($insert)
    {
        if (empty($this->userId) && !(\Yii::$app instanceof Application) && !\Yii::$app->user->isGuest) {
            $this->userId = \Yii::$app->user->id;
        }

        if (empty($this->hostname) && \Yii::$app->request->hasMethod('getUserIP')) {
            $this->hostname = \Yii::$app->request->getUserIP();
        }

        if (!empty($this->data) && is_array($this->data)) {
            $this->data = json_encode($this->data);
        }

        if ($this->relatedObject) {
            $this->relatedObjectType = CompositeRelationHelper::resolveObjectType($this->relatedObject);
            $this->relatedObjectId = $this->relatedObject->primaryKey;
        }

        return parent::beforeSave($insert);
    }
}
