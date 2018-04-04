<?php
namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $surname;
    public $email;
    public $password;
//    public $repassword;

    public function rules()
    {
        return[
            [['username', 'password','surname', 'email'], 'required', 'message' => 'Заполните поля'],
        ];
    }

    public function attributeLabels()
    {
        return[
            'username' => 'Имя',
            'surname' => 'Фамилия',
            'email' => 'email',
            'password' => 'Пароль',
            'repassword' => 'Повторите пароль'
        ];
    }
}
