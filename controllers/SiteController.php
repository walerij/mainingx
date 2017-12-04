<?php

namespace app\controllers;

use app\models\EarningsForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
use app\models\UserRecord;
use app\models\EarningsRecord;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
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
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

/*
 * добавление пользователя
 * */
    public function actionAdduser()
    {
        if (Yii::$app->request->isPost)
            return $this->addUserPost();
        $userAdd = new UserForm();
        return $this->render('user\adduser', ['AddUser' => $userAdd]);
    }

    private function addUserPost()
    {
        $userAdd = new UserForm();
        if ($userAdd->load(Yii::$app->request->post()))
            if ($userAdd->validate()) {
                $userRecord = new UserRecord();//идет добавление пользователя
                $userRecord->setUserAddForm($userAdd);
                $userRecord->save();
                $earningsRecords = new EarningsRecord();
                $earningsRecords->addEarning($userRecord);
                $earningsRecords->save();

                //return $this->render('user\usersuccess',
                  //  ['AddUser'=>$userRecord]
                //);
                return $this->redirect('/site/usersuccess/');
            }
    }

    public function actionUsersuccess()
    {
        $userEarning =  UserRecord::find()->all()
                ;
        return $this->render('user\usersuccess', ['AddUser' => $userEarning]);

    }
  public function actionUserearning()
    {
        $userEarning =  UserRecord::find()->all()
                ;
        return $this->render('user\userearning', ['AddUser' => $userEarning]);

    }
    
    public function actionPaymenthistory()
    {
        $userEarning =  UserRecord::find()->all()
                ;
        return $this->render('user\userearning', ['AddUser' => $userEarning]);

    }

}
