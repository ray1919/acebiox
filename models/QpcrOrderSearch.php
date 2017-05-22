<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QpcrOrder;

/**
 * QpcrOrderSearch represents the model behind the search form about `app\models\QpcrOrder`.
 */
class QpcrOrderSearch extends QpcrOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'integer'],
            [['title', 'timestamp', 'gene_list', 'technology', 'chemistry', 'application', 'organism', 'note', 'name', 'phone', 'email', 'institution'], 'safe'],
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
        $query = QpcrOrder::find();

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
            'user_id' => $this->user_id,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'gene_list', $this->gene_list])
            ->andFilterWhere(['like', 'timestamp', $this->timestamp])
            ->andFilterWhere(['like', 'technology', $this->technology])
            ->andFilterWhere(['like', 'chemistry', $this->chemistry])
            ->andFilterWhere(['like', 'application', $this->application])
            ->andFilterWhere(['like', 'organism', $this->organism])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'institution', $this->institution]);

        return $dataProvider;
    }
}
