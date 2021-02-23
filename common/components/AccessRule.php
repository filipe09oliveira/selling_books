<?php


namespace common\components;


use Yii;
use yii\base\InvalidConfigException;

class AccessRule extends \yii\filters\AccessRule
{

    protected function matchRole($user)
    {
        $items = empty($this->roles) ? [] : $this->roles;

        if (!empty($this->permissions)) {
            $items = array_merge($items, $this->permissions);
        }

        if (empty($items)) {
            return true;
        }

        if ($user === false) {
            throw new InvalidConfigException('The user application component must be available to specify roles in AccessRule.');
        }
        //dd($user->identity->tipo);
        foreach ($items as $item) {
            if ($item === '?') {
                if ($user->getIsGuest()) {
                    return true;
                }
            } elseif ($item === '@') {
                if (!$user->getIsGuest()) {
                    return true;
                }
            } elseif (!$user->getIsGuest() && $item === $user->identity->tipo) {
                return true;
            } else {
                if (!isset($roleParams)) {
                    $roleParams = !is_array($this->roleParams) && is_callable($this->roleParams) ? call_user_func($this->roleParams, $this) : $this->roleParams;
                }
                if ($user->can($item, $roleParams)) {
                    return true;
                }
            }
        }

        return false;
    }

}