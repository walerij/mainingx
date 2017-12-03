<?php
namespace app\models;
use yii\db\ActiveRecord;

class EarningsRecord extends ActiveRecord
{
    public static function tableName()
    {
        return "earnings";
    }
/*
 *  'id' => $this->primaryKey(),
            'user_id' =>$this->integer(),
            'total_hashes'=>$this->float(),//всего хешей
            'total_due'=>$this->float(),//всего заработано
            'total_paid'=>$this->float(),//всего выпдачено
            'hash_rate'=>$this->float(),//скорость хешей
*/
    public function addEarning($UserForm) {
        $this->user_id = $UserForm->id;
        $this->total_hashes=0;
        $this->total_due=0;
        $this->total_paid=0;
        $this->hash_rate=0;
    }

    public function getUser()
    {
        return $this->hasOne(UserRecord::className(),['id'=>'user_id']);
    }

}