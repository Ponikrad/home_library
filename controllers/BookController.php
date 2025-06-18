<?php

namespace app\controllers;

use Yii;
use app\models\Book;
use app\models\BookSearch;
use app\models\Category;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class BookController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'categories' => Category::find()->all(),
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Książka została dodana pomyślnie.');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
    
        return $this->render('create', [
            'model' => $model,
            'categories' => Category::find()->all(),
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldCoverImage = $model->cover_image;

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            
            if ($model->imageFile && $model->validate(['imageFile'])) { // waliduj tylko plik, zanim zniknie
                $model->upload(); // zapisz plik
            } else {
                $model->cover_image = $oldCoverImage; // zostaw stare zdjęcie
            }
        
            if ($model->save(false)) { // save(false), bo już validate wyżej
                Yii::$app->session->setFlash('success', 'Książka została zaktualizowana pomyślnie.');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
    
        return $this->render('update', [
            'model' => $model,
            'categories' => Category::find()->all(),
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', 'Książka została usunięta pomyślnie.');

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('Żądana strona nie istnieje.');
    }
}