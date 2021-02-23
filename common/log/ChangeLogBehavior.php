<?php

namespace common\log;

use yii\base\Behavior;
use yii\base\Event;
use yii\db\ActiveRecord;
use yii\helpers\StringHelper;

/**
 * Class ChangeLogBehavior
 * @package common\modules\eventLogger\behaviors
 *
 * @property array $labels
 */
class ChangeLogBehavior extends Behavior
{
    /**
     * @var array
     */
    public $excludedAttributes = [];

    /**
     * @var string
     */
    public $type = 'atualizado';

    /**
     * @return array
     */
    const DELETED = 'excluido';
    const CREATED = 'criado';
    const UPDATED = 'atualizado';

    /**
     * @return array
     */
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_UPDATE => 'addLog',
            ActiveRecord::EVENT_AFTER_INSERT => 'addLog',
            ActiveRecord::EVENT_BEFORE_DELETE => 'addDeleteLog',
        ];
    }

    /**
     * @param \yii\base\Event $event
     */
    public function addLog(Event $event)
    {
        /**
         * @var ActiveRecord $owner
         */
        $owner = $this->owner;
        $changedAttributes = $event->changedAttributes;

        $diff = [];

        foreach ($changedAttributes as $attrName => $attrVal) {
            $newAttrVal = $owner->getAttribute($attrName);

            //avoid float compare
            $newAttrVal = is_float($newAttrVal) ? StringHelper::floatToString($newAttrVal) : $newAttrVal;
            $attrVal = is_float($attrVal) ? StringHelper::floatToString($attrVal) : $attrVal;

            if ($newAttrVal != $attrVal) {
                $diff[$attrName] = [$attrVal, $newAttrVal];
            }
        }
        $diff = $this->applyExclude($diff);

        if ($diff) {
            $diff = $this->owner->setChangelogLabels($diff);
            $logEvent = new LogItem();
            $logEvent->relatedObject = $owner;
            $logEvent->data = $diff;
            $logEvent->from = LogItem::listFrom()[basename(\Yii::getAlias('@app'))];
            $logEvent->type = $event->name == 'afterInsert' ? self::CREATED : self::UPDATED;
            $logEvent->save();
        }
    }

    /**
     * @param $data
     * @param $type
     */
    public function addCustomLog($data, $type = null)
    {
        if (!is_array($data)) {
            $data = [$data];
        }
        if ($type) {
            $this->setType($type);
        }

        $logEvent = new LogItem();
        $logEvent->relatedObject = $this->owner;
        $logEvent->data = $data;
        $logEvent->from = LogItem::listFrom()[basename(\Yii::getAlias('@app'))];
        $logEvent->type = $this->type;
        $logEvent->save();
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param array $diff
     *
     * @return array
     */
    private function applyExclude(array $diff)
    {
        foreach ($this->excludedAttributes as $attr) {
            unset($diff[$attr]);
        }

        return $diff;
    }

    /**
     * @param array $diff
     *
     * @return array
     */
    public function setChangelogLabels(array $diff)
    {
        return $diff;
    }

    public function addDeleteLog()
    {
        $logEvent = new LogItem();
        $logEvent->relatedObject = $this->owner;
        $logEvent->data = '';
        $logEvent->from = LogItem::listFrom()[basename(\Yii::getAlias('@app'))];
        $logEvent->type = self::DELETED;
        $logEvent->save();
    }

}
