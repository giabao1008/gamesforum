<?php

namespace backend\controllers;

use Yii;
use console\models\games\Games;
use console\models\games\SearchGames;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * GamesController implements the CRUD actions for Games model.
 */
class GamesController extends AppController
{


    /**
     * Lists all Games models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchGames();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Games model.
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
     * Creates a new Games model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Games();
        if ($model->load(Yii::$app->request->post())) {
            $upload = UploadedFile::getInstance($model, 'file');

            if ($upload) {
                $upload->saveAs('uploads/' . $upload->name);
                $model->logo = $upload->name;
                $model->create_at = time();
                $model->update_at= time();
                $model->create_by = Yii::$app->user->identity->username;
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
     * Updates an existing Games model.
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
     * Deletes an existing Games model.
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
     * Finds the Games model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Games the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Games::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
