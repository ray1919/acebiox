<?php

namespace app\models;

use Yii;

class CaptchaRefreshableAction extends \yii\captcha\CaptchaAction
{
    public function validate($input, $caseSensitive)
    {
        // Skip validation on AJAX requests, as it expires the captcha.
        if (Yii::$app->request->isAjax) {
            return true;
        }
        return parent::validate($input, $caseSensitive);
    }
}