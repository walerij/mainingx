<?php
namespace app\models;

use yii\base\Model;

class EarningsForm extends Model{

/*'id' => $this->primaryKey(),
'user_id' =>$this->integer(),
'total_hashes'=>$this->float(),//всего хешей
'total_due'=>$this->float(),//всего заработано
'total_paid'=>$this->float(),//всего выпдачено
'hash_rate'=>$this->float(),//скорость хешей*/

   public $user_id;
   public $total_hashes;
   public $total_due;
   public $total_paid;
   public $hash_rate;

   public function rules()
   {
       return
       [
           [['user_id','total_hashes','total_due','total_paid','hash_rate'],'required']
       ];
   }

}