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
        $art->views_count += 1 ;
        $art->save();
        return $this->render('article',[
            'art' => $art,
        ]);
    }

}
