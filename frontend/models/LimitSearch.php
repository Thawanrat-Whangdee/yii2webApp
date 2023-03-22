<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Limit;

/**
 * LimitSearch represents the model behind the search form of `app\models\Limit`.
 */
class LimitSearch extends Limit
{

    public function rules()
    {
        return [
            [['_id', 'amount', 'user_id'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Limit::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere(['like', '_id', $this->_id])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'user_id', $this->user_id]);

        return $dataProvider;
    }
}
