<?php

namespace frontend\services;

use common\models\QueueStatuses;
use frontend\models\QueueStatusesForm;
use Yii;
use yii\base\BaseObject;

class QueueStatusesService extends BaseObject
{
    public $queueStatusesForm;

    public function __construct(QueueStatusesForm $queueStatusesForm, $config = [])
    {
        $this->queueStatusesForm =$queueStatusesForm;

        parent::__construct($config);
    }

    public function save()
    {
        $model = new QueueStatuses($this->queueStatusesForm->attributes);

        if(!$this->exists($model) && $model->save()) {
            return true;
        }

        return false;
    }

    public function exists(QueueStatuses $model)
    {
        return QueueStatuses::find()
            ->where(['s_name' => $model->s_name])
            ->andWhere(['c_name' => $model->c_name])
            ->andWhere(['c_id' => $model->c_id])
            ->andWhere(['a_type' => $model->a_type])
            ->andWhere(['direction' => $model->direction])
            ->andWhere(['activation' => $model->activation])
            ->andWhere(['c_state' => $model->c_state])
            ->andWhere(['control' => $model->control])
            ->exists();
    }
}