<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class FrontEndController extends \yii\web\Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','index','view','signup','games','contact','about','news'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout','upload'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['upload'],
                        'roles' => ['post','admin'],
                        'denyCallback' => function ($rule, $action) {
                            return !Yii::$app->response->redirect('site/error.php');
                        },
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['@'],
                ],
            ],
        ];
    }
}
