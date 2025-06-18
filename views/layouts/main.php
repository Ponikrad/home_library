<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
$this->registerCssFile('@web/css/custom.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '<i class="fas fa-book"></i> Domowa Biblioteka',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            ['label' => '<i class="fas fa-home"></i> Strona główna', 'url' => ['/site/index'], 'encode' => false],
            ['label' => '<i class="fas Afa-book"></i> Katalog książek', 'url' => ['/book/index'], 'encode' => false],
            ['label' => '<i class="fas fa-tags"></i> Kategorie', 'url' => ['/category/index'], 'encode' => false],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container mt-4">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'options' => ['class' => 'breadcrumb'],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-dark">
                <p>&copy; Domowa Biblioteka <?= date('Y') ?></p>
            </div>
            <div class="col-md-6 text-right text-dark">
                <p>Stworzone z <i class="fas fa-heart text-danger"></i> do książek</p>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>