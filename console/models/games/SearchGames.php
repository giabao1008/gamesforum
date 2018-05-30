<?php

namespace console\models\games;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use console\models\games\Games;

/**
 * SearchGames represents the model behind the search form of `console\models\games\Games`.
 */
class SearchGames extends Games
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'game_type', 'views_count', 'is_Hot', 'create_at', 'update_at', 'status'], 'integer'],
            [['name', 'logo', 'slug', 'description', 'author', 'require', 'create_by'], 'safe'],
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
        $query = Games::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'defaultPageSize' => 5,
            ]
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
            'game_type' => $this->game_type,
            'views_count' => $this->views_count,
            'is_Hot' => $this->is_Hot,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'require', $this->require])
            ->andFilterWhere(['like', 'create_by', $this->create_by]);

        return $dataProvider;
    }
}
