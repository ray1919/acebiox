<?php

namespace app\models;

use dektrium\user\models\User as BaseUser;

class User extends BaseUser
{
    public function rules()
    {
        $rules = parent::rules();
        
        unset($rules['usernameUnique']);
        return $rules;
    }
}