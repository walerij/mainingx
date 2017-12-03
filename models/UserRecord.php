<?php
namespace app\models;
use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord{
    public static function tableName()
    {
        return "user";
    }

    public function getEarnings()
    {
        return $this->hasOne(EarningsRecord::className(),['user_id'=>'id']);
    }


    public function setUserAddForm($userJoinForm)
    {
        $this->login=$userJoinForm->login;
        $this->setPassword($userJoinForm->password);
        $this->cashetype=$userJoinForm->cashetype;
        $this->cashenumber=$userJoinForm->cashenumber;
    }

    public function setPassword($password)
    {
        $this->password=Yii::$app->security->generatePasswordHash($password);
        //  $this->authokey=Yii::$app->security->generateRandomString(100);
    }

}