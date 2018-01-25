<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StepsRecord;

/**
 * AdminStepsSearch represents the model behind the search form about `app\models\StepsRecord`.
 */
class AdminStepsSearch extends StepsRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'lesson_id'], 'integer'],
            [['title', 'info', 'steptype'], 'safe'],
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
        $query = StepsRecord::find();

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
        $query->andFilterWhere([
            'id' => $this->id,
            'lesson_id' => $this->lesson_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'info', $this->info])
            ->andFilterWhere(['like', 'steptype', $this->steptype]);

        return $dataProvider;
    }
}
