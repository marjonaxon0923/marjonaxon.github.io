<?php

namespace frontend\models;

use yii\base\Model;

class Person extends Model
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $gender;
    public function rules(): array
    {
        return [
          [['firstname', 'lastname', 'email'], 'required'],
            [['firstname', 'lastname', 'email'], 'string', 'max' => 50],
            ['email', 'email'],
            ['gender', 'in', 'range' => ['erkak', 'ayol']],
        ];

    }

}