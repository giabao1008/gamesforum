<?php

namespace console\models\articles;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use console\models\articles\Articles;

/**
 * SearchArticles represents the model behind the search form of `console\models\articles\Articles`.
 */
class SearchArticles extends Articles
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'create_at', 'update_at'], 'integer'],
            [['title', 'body', 'image', 'slug', 'create_by', 'update_by'], 'safe'],
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
        $query = Articles::find();

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
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'create_by', $this->create_by])
            ->andFilterWhere(['like', 'update_by', $this->update_by]);

        return $dataProvider;
    }
}
