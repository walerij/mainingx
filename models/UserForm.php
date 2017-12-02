<?php
namespace  app\models;

class UserForm extends Model{
    public $email;
    public $password;
    public $cashetype;
    public $cashenumber;

    public function rules()
    {
        return [
            [['email','password','casheptype','cashenumber'],'required','message'=>'Поле не должно быть пустым'],
            ['email','email','message'=>'это не email']
        ];
    }


}