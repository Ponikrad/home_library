<?php

use yii\helpers\Html;

$this->title = 'Aktualizuj Kategorię: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kategorie', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Aktualizuj';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>