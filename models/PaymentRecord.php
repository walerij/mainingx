<?php

namespace app\models;
use yii\db\ActiveRecord;

class PaymentRecord extends ActiveRecord{
     public static function tableName()
    {
        return "paymenthistory";
    }
}
