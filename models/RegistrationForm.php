<?php

namespace app\models;
use Yii;
use dektrium\user\models\RegistrationForm as BaseRegistrationForm;

class RegistrationForm extends BaseRegistrationForm
{
    /**
     * @var string
     */
    public $captcha;
    
    /**
     * @var iagree
     */
    public $iagree;
    
    public function rules()
    {
        $rules = parent::rules();
        $rules['usernameLength'] = ['username', 'string', 'min' => 1, 'max' => 25];
        unset($rules['usernameUnique']);
        $rules[] = ['captcha', 'required'];
        $rules[] = ['captcha', 'captcha'];
        $rules[] = ['iagree', 'compare', 'compareValue' => true, 'message' => '别忘了勾选这个^_^'];
        return $rules;
    }

    public function attributeLabels()
    {
        return [
            'email'    => Yii::t('user', 'Email 电子邮件'),
            'username' => Yii::t('user', 'Name 名字'),
            'password' => Yii::t('user', 'Password 密码'),
            'captcha'  => Yii::t('user', '输入右侧验证码'),
            'iagree'   => Yii::t('user', 'I agree'),
        ];
    }
}