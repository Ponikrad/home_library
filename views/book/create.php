<?php

use yii\helpers\Html;

$this->title = 'Dodaj Nową Książkę';
$this->params['breadcrumbs'][] = ['label' => 'Katalog Książek', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
    ]) ?>

</div>