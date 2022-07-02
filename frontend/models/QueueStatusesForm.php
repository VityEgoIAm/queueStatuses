<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class QueueStatusesForm extends Model
{
    public $s_name;
    public $c_name;
    public $c_id;
    public $a_type;
    public $direction;
    public $activation;
    public $c_state;
    public $control;

    public function rules()
    {
        return [
            [['s_name', 'c_name', 'c_id', 'a_type', 'direction', 'activation', 'c_state', 'control'], 'required'],
            [['s_name', 'c_name'], 'string', 'max' => 512],
            [['c_id', 'direction', 'activation', 'c_state', 'control'], 'string', 'max' => 32],
            [['a_type'], 'string', 'max' => 128],
        ];
    }
}
