<?php
/**
 * Created by PhpStorm.
 * User: JB-NB-02
 * Date: 26.09.2017
 * Time: 12:18
 */

namespace app\models;


use yii\base\Model;


class UserForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email']
            ];
    }
}
?>