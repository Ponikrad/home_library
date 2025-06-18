<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Book;
use app\models\Category;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        $recentBooks = Book::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->all();
        $totalBooks = Book::find()->count();
        $categoryCounts = Category::find()
            ->select(['category.name', 'COUNT(book.id) as book_count'])
            ->leftJoin('book', 'book.category_id = category.id')
            ->groupBy('category.id')
            ->asArray()
            ->all();

        return $this->render('index', [
            'recentBooks' => $recentBooks,
            'totalBooks' => $totalBooks,
            'categoryCounts' => $categoryCounts,
        ]);
    }
}