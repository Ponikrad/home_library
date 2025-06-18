<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Katalog Książek', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1><?= Html::encode($this->title) ?></h1>
    <div>
        <?= Html::a('<i class="fas fa-edit"></i> Aktualizuj', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="fas fa-trash"></i> Usuń', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Czy na pewno chcesz usunąć tę książkę?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="fas fa-arrow-left"></i> Powrót do listy', ['index'], ['class' => 'btn btn-secondary']) ?>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card mb-4">
            <img src="<?= $model->getCoverUrl() ?>" class="card-img-top" alt="<?= Html::encode($model->title) ?>" style="max-height: 400px; object-fit: contain;">
            <div class="card-body text-center">
                <h5 class="card-title"><?= Html::encode($model->title) ?></h5>
                <p class="card-text"><?= Html::encode($model->author) ?></p>
                <div class="mt-3">
                    <span class="badge badge-primary"><?= $model->category ? Html::encode($model->category->name) : 'Brak kategorii' ?></span>
                    <span class="badge badge-info"><?= Html::encode($model->publication_year) ?></span>
                    <span class="badge <?= $model->status === 'dostępna' ? 'badge-success' : ($model->status === 'wypożyczona' ? 'badge-warning' : 'badge-danger') ?>"><?= Html::encode($model->status) ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <i class="fas fa-info-circle"></i> Szczegóły książki
            </div>
            <div class="card-body">
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table table-striped table-bordered detail-view'],
                    'attributes' => [
                        'id',
                        'title',
                        'author',
                        'isbn',
                        'publication_year',
                        'publisher',
                        [
                            'attribute' => 'category_id',
                            'value' => $model->category ? $model->category->name : 'Brak kategorii',
                        ],
                        'pages',
                        'status',
                        'created_at',
                        'updated_at',
                    ],
                ]) ?>
            </div>
        </div>

        <?php if (!empty($model->description)): ?>
        <div class="card mt-4">
            <div class="card-header">
                <i class="fas fa-book-open"></i> Opis
            </div>
            <div class="card-body">
                <?= nl2br(Html::encode($model->description)) ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
</div>