<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "qpcr_order".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $timestamp
 * @property string $gene_list
 * @property string $technology
 * @property string $chemistry
 * @property string $application
 * @property string $organism
 * @property string $note
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $institution
 *
 * @property User $user
 */
class QpcrOrder extends \yii\db\ActiveRecord
{
    public $sender;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'qpcr_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[/*'user_id', */'title', 'technology', 'chemistry', 'application', 'organism', 'email'], 'required'],
            [['user_id'], 'integer'],
            [['timestamp'], 'safe'],
            ['email', 'email'],
            [['gene_list', 'note'], 'string'],
            [['title', 'technology', 'chemistry', 'application', 'organism', 'name', 'phone', 'email', 'institution'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            //['technology', 'default', 'value' => 'qPCR', 'isEmpty'=>true, 'when'=> function($model) { return $model->isNewRecord; }],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => '产品',
            'timestamp' => 'Timestamp',
            'gene_list' => '基因列表',
            'technology' => '技术方法',
            'chemistry' => '检测方法',
            'application' => '应用场景',
            'organism' => '物种',
            'note' => '备注',
            'name' => '联系姓名',
            'phone' => '联系电话',
            'email' => '邮件地址',
            'institution' => '单位',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
    
    public function sendOrder($subject, $view, $params = [])
    {
        /** @var \yii\mail\BaseMailer $mailer */
        $mailer = Yii::$app->mailer;
        $mailer->viewPath = Yii::$app->mailer->viewPath;
        $mailer->getView()->theme = Yii::$app->view->theme;

        $this->sender = Yii::$app->getModule('user')->mailer['sender'];

        $to = isset(Yii::$app->params['orderEmail']) ?
            Yii::$app->params['orderEmail']
            : Yii::$app->params['adminEmail'];
        // print_r($this->sender);exit;
        return $mailer->compose(['html' => $view, 'text' => 'text/' . $view], $params)
            ->setTo($to)
            ->setFrom($this->sender)
            ->setSubject($subject)
            ->send();
    }

}
