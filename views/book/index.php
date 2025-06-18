<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;

$this->title = 'Katalog Książek';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-index">

<div class="d-flex justify-content-between align-items-center">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= Html::a('<i class="fas fa-plus"></i> Dodaj Nową Książkę', ['create'], ['class' => 'btn btn-success']) ?>
</div>

<div class="card mt-3">
    <div class="card-header">
        <i class="fas fa-search"></i> Wyszukiwanie
    </div>
    <div class="card-body">
        <?php Pjax::begin(); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'table table-striped table-bordered'],
            'columns' => [
                [
                    'attribute' => 'cover_image',
                    'format' => 'raw',
                    'value' => function ($model) {
                        return Html::img($model->getCoverUrl(), [
                            'class' => 'book-cover-small',
                            'alt' => $model->title
                        ]);
                    },
                    'filter' => false,
                ],
                'title',
                'author',
                [
                    'attribute' => 'category_id',
                    'value' => 'category.name',
                    'filter' => ArrayHelper::map($categories, 'id', 'name'),
                ],
                [
                    'attribute' => 'publication_year',
                    'filter' => Html::activeTextInput($searchModel, 'publication_year', [
                        'class' => 'form-control', 
                        'type' => 'number'
                    ]),
                ],
                [
                    'attribute' => 'status',
                    'filter' => [
                        'dostępna' => 'Dostępna',
                        'wypożyczona' => 'Wypożyczona',
                        'zagubiona' => 'Zagubiona',
                    ],
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {update} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model, $key) {
                            return Html::a('<i class="fas fa-eye"></i>', $url, [
                                'title' => 'Zobacz',
                                'class' => 'btn btn-sm btn-info',
                            ]);
                        },
                        'update' => function ($url, $model, $key) {
                            return Html::a('<i class="fas fa-edit"></i>', $url, [
                                'title' => 'Edytuj',
                                'class' => 'btn btn-sm btn-primary',
                            ]);
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('<i class="fas fa-trash"></i>', $url, [
                                'title' => 'Usuń',
                                'class' => 'btn btn-sm btn-danger',
                                'data' => [
                                    'confirm' => 'Czy na pewno chcesz usunąć tę książkę?',
                                    'method' => 'post',
                                ],
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
</div>

<div class="mt-4">
    <h2>Widok kafelkowy</h2>
    <div class="row">
        <?php foreach ($dataProvider->getModels() as $book): ?>
            <div class="col-md-3 mb-4">
                <div class="card book-card">
                    <img src="<?= $book->getCoverUrl() ?>" class="card-img-top book-cover" alt="<?= Html::encode($book->title) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= Html::encode($book->title) ?></h5>
                        <p class="card-text"><?= Html::encode($book->author) ?></p>
                        <div class="d-flex justify-content-between">
                            <span class="badge badge-primary"><?= $book->category ? Html::encode($book->category->name) : 'Brak kategorii' ?></span>
                            <span class="badge badge-info"><?= Html::encode($book->publication_year) ?></span>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <?= Html::a('<i class="fas fa-eye"></i> Zobacz', ['view', 'id' => $book->id], ['class' => 'btn btn-sm btn-info']) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>