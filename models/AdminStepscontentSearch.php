<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StepscontentRecord;

/**
 * AdminStepscontentSearch represents the model behind the search form about `app\models\StepscontentRecord`.
 */
class AdminStepscontentSearch extends StepscontentRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'step_id'], 'integer'],
            [['content', 'metka'], 'safe'],
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
        $query = StepscontentRecord::find();

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
            'step_id' => $this->step_id,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'metka', $this->metka]);

        return $dataProvider;
    }
}
