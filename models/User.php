<?php

namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser
{
    public function rules()
    {
        $rules = parent::rules();
        $rules['usernameLength'] = ['username', 'string', 'min' => 1, 'max' => 25];
        unset($rules['usernameUnique']);
        return $rules;
    }
    
    public static $usernameRegexp = '//';
    
/*    public function attributeLabels()
    {
        $attr = parent::attributeLabels();
        $arrt['username'] = \Yii::t('user', 'Name 名字');
        return $attr;
    }*/
}