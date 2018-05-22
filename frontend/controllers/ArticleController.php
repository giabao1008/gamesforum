<?php

namespace frontend\controllers;
use console\models\articles\Articles;

class ArticleController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('article');
    }
    public function actionView($slug)
    {
        $art = Articles::findOne(['slug'=> $slug]);
        $article_Time = Articles::find()->orderBy('create_at')->limit(7);
        return $this->render('article',[
            'art' => $art,
            'article_Time' => $article_Time,
        ]);
    }

}
