<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
?>

<div class="book-form card">
    <div class="card-body">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'publication_year')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'publisher')->textInput(['maxlength' => true]) ?>
            
            <?= $form->field($model, 'category_id')->dropDownList(
                ArrayHelper::map($categories, 'id', 'name'),
                ['prompt' => 'Wybierz kategorię']
            ) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'pages')->textInput(['type' => 'number']) ?>

            <?= $form->field($model, 'status')->dropDownList([
                'dostępna' => 'Dostępna',
                'wypożyczona' => 'Wypożyczona',
                'zagubiona' => 'Zagubiona',
            ]) ?>
            
            <?= $form->field($model, 'imageFile')->fileInput(['class' => 'form-control']) ?>
            
            <?php if (!$model->isNewRecord && $model->cover_image): ?>
                <div class="form-group">
                    <label class="control-label">Aktualna okładka</label>
                    <div>
                        <img src="<?= $model->getCoverUrl() ?>" alt="<?= $model->title ?>" style="max-width: 200px;">
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Zapisz', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Anuluj', ['index'], ['class' => 'btn btn-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
</div>