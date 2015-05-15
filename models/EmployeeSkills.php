<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee_skills".
 *
 * @property integer $employee_id
 * @property integer $skill_id
 */
class EmployeeSkills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee_skills';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'skill_id'], 'required'],
            [['employee_id', 'skill_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Сотрудник',
            'skill_id' => 'Навык',
        ];
    }
}
