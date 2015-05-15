<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_groups".
 *
 * @property integer $employee_id
 * @property integer $group_id
 */
class EmployeeGroups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'group_id'], 'required'],
            [['employee_id', 'group_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Сотрудник',
            'group_id' => 'Группа',
        ];
    }
}
