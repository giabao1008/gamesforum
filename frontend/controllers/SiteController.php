<?php
namespace frontend\controllers;

use backend\controllers\AppController;
use console\models\articles\Articles;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use console\models\contacts\Contacts;
use console\models\games\Games;
use console\models\games\GameType;
use console\models\banners\Banners;
use console\models\games\SearchGames;
use yii\web\UploadedFile;
use backend\Url\Friendly;
/**
 * Site controller
 */
class SiteController extends FrontEndController
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
{
$GameType = GameType::find()->all();
$gameNews = Games::find()->where(['status' => 1])->orderBy(['create_at' => SORT_DESC])->limit(8)->all();
$banner = Banners::find()->where(['status' => 1])->all();
return $this->render('index', [
'gameNews' => $gameNews,
'GameType' => $GameType,
'banner' => $banner,
]);
}

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Yii::$app->request->referrer);
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {

        $model = new ContactForm();
        $contacts = new Contacts();
        if ($model->load(Yii::$app->request->post())) {
            $data_post = Yii::$app->request->post();

            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $contacts->name = $data_post['ContactForm']['name'];
                $contacts->email = $data_post['ContactForm']['email'];
                $contacts->subject = $data_post['ContactForm']['subject'];
                $contacts->body = $data_post['ContactForm']['body'];
                $contacts->send_at = time();

                // var_dump($contacts); die();
                $contacts->save();
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }
        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
             Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionGames()
    {
        $games = Games::find()->orderBy(['create_at' => SORT_DESC])->where(['status' => 1])->all();
        return $this->render('games', [
            'games' => $games,
        ]);
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionUpload(){
        $model = new Games();
        if ($model->load(Yii::$app->request->post())) {
            $upload = UploadedFile::getInstance($model, 'file');

            if ($upload) {
                $upload->saveAs('../../backend/web/uploads/' . $upload->name);
                $model->logo = $upload->name;
                $model->slug = Friendly::url_friendly($model->slug);
                $model->create_at = time();
                $model->update_at = time();
                $model->is_Hot = 1 ;
                $model->status = 0;
                $model->create_by = Yii::$app->user->identity->username;
            }
            if ($model->save()) {
                $this->redirect(['games']);
                return  Yii::$app->session->addFlash('success', 'Bạn đã upload game thành công, vui lòng đợi admin duyệt bài');
                // return $this->redirect(['view', 'id' => $model->id]);
            } else {
                $this->render('upload', [
                    'model' => $model
                ]);
                return   Yii::$app->session->addFlash('danger', 'Tạo thất bại');
            }
        } else {

            return $this->render('upload', [
                'model' => $model
            ]);
        }
    }
}
