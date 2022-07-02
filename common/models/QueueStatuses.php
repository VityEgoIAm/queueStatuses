<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "queue_statuses".
 *
 * @property int $id
 * @property string $s_name
 * @property string $c_name
 * @property string $c_id
 * @property string $a_type
 * @property string $direction
 * @property string $activation
 * @property string $c_state
 * @property string $control
 */
class QueueStatuses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'queue_statuses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['s_name', 'c_name', 'c_id', 'a_type', 'direction', 'activation', 'c_state', 'control'], 'required'],
            [['s_name', 'c_name'], 'string', 'max' => 512],
            [['c_id', 'direction', 'activation', 'c_state', 'control'], 'string', 'max' => 32],
            [['a_type'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            's_name' => 'S Name',
            'c_name' => 'C Name',
            'c_id' => 'C ID',
            'a_type' => 'A Type',
            'direction' => 'Direction',
            'activation' => 'Activation',
            'c_state' => 'C State',
            'control' => 'Control',
        ];
    }
}
