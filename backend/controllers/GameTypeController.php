<?php

namespace backend\controllers;

use Yii;
use console\models\games\GameType;
use console\models\games\SearchGameType;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GameTypeController implements the CRUD actions for GameType model.
 */
class GameTypeController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all GameType models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchGameType();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single GameType model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new GameType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new GameType();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $upload = UploadedFile::getInstance($model, 'file');

            if ($upload) {
                $upload->saveAs('uploads/' . $upload->name);
                $model->logo = $upload->name;
            }
            if ($model->save()) {
                Yii::$app->session->addFlash('success', 'Bạn đã tạo img thành cmn công');
                return $this->redirect(['index']);
                // return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->addFlash('danger', 'Tạo thất bại');
                return $this->render('create', [
                    'model' => $model
                ]);
            }
        } else {

            return $this->render('create', [
                'model' => $model
            ]);
        }
    }

    /**
     * Updates an existing GameType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing GameType model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the GameType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return GameType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = GameType::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
