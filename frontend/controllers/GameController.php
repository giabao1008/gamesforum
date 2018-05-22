<?php

namespace frontend\controllers;
use console\models\articles\Articles;
use console\models\games\Games;

class GameController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('game');
    }
    public function actionView($slug)
    {   $art = Articles::find()->limit(7)->all();
        $game = Games::findOne(['slug'=> $slug]);
        $same = Games::find()->where(['game_type'=>$game->game_type])->andWhere(['<>','id' , $game->id ])->all();
        $article_Time = Articles::find()->orderBy(['create_at'  => SORT_DESC]  )->limit(7)->all();
        return $this->render('game',[
            'game' => $game,
            'art' => $art,
            'same' => $same,
            'article_Time' => $article_Time,
        ]);
    }

}
