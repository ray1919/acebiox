<?php

namespace app\models;
use Yii;
use dektrium\user\models\LoginForm as BaseLoginForm;

class LoginForm extends BaseLoginForm
{
    public function attributeLabels()
    {
        return [
            'login'      => Yii::t('user', 'Email'),
            'password'   => Yii::t('user', 'Password'),
            'rememberMe' => Yii::t('user', 'Remember me next time'),
        ];
    }
    
    public static function loginList()
    {
        return ArrayHelper::map(User::find()->where(['blocked_at' => null])->all(), 'username', function ($user) {
            return sprintf('%s', Html::encode($user->email));
        });
    }
}