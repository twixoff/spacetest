<?php

namespace app\models;

use Yii;
use app\models\EmployeeGroups;
use app\models\EmployeeSkills;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $name
 * @property integer $inPlace
 */
class Employees extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['inPlace'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['groups', 'skills'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'name' => 'Имя',
            'inPlace' => 'На месте',
            'groups' => 'Группы',
            'skills' => 'Навыки',
        ];
    }
    
    
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['id' => 'group_id'])
            ->viaTable('employee_groups', ['employee_id' => 'id']);
    }
    
    
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }
    
    
    public function getSkills()
    {
        return $this->hasMany(Skills::className(), ['id' => 'skill_id'])
            ->viaTable('employee_skills', ['employee_id' => 'id']);
    }
    
    
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }
    
    
    public function afterSave($insert, $changedAttributes)
    {
        if(!$insert) {
            EmployeeGroups::deleteAll(['employee_id' => $this->id]);
            EmployeeSkills::deleteAll(['employee_id' => $this->id]);
        }
        if(is_array($this->groups)) {
            foreach ($this->groups as $group) {
                $category = new EmployeeGroups();
                $category->employee_id = $this->id;
                $category->group_id = $group;
                $category->save();
            }
        }
        if(is_array($this->skills)) {
            foreach ($this->skills as $skill) {
                $category = new EmployeeSkills();
                $category->employee_id = $this->id;
                $category->skill_id = $skill;
                $category->save();
            }
        }
    }    
    
}
