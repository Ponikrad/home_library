<?php

use yii\helpers\Html;

$this->title = 'Aktualizuj Książkę: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Katalog Książek', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Aktualizuj';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>