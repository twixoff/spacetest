<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form about `app\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'inPlace', 'groups', 'skills'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Employees::find();
        
        $query->joinWith(['groups', 'skills']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['groups'] = [
            'asc' => ['groups.name' => SORT_ASC],
            'desc' => ['groups.name' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['skills'] = [
            'asc' => ['skills.name' => SORT_ASC],
            'desc' => ['skills.name' => SORT_DESC],
        ];
  
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'inPlace' => $this->inPlace,
        ]);

        $query->andFilterWhere(['IN', 'groups.id', $this->groups]);
        
        $query->andFilterWhere(['IN', 'skills.id', $this->skills]);
        
        $query->andFilterWhere(['like', 'employees.name', $this->name]);

        $query->groupBy(['employees.id']);
        
        return $dataProvider;
    }
}
