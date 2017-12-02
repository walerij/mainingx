<?php
namespace app\models;
use yii\db\ActiveRecord;

class EarningsRecord extends ActiveRecord
{
    public static function tableName()
    {
        return "earnings";
    }
}