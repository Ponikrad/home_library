<?php

use yii\helpers\Html;

$this->title = 'Domowa Biblioteka';
?>
<div class="site-index">

<div class="jumbotron text-center">
    <h1><i class="fas fa-book"></i> Domowa Biblioteka</h1>
    <p class="lead">System zarządzania kolekcją książek domowych.</p>
    <p>
        <?= Html::a('<i class="fas fa-search"></i> Przeglądaj katalog', ['/book/index'], ['class' => 'btn btn-lg btn-success']) ?>
        <?= Html::a('<i class="fas fa-th-list"></i> Zarządzaj kategoriami', ['/category/index'], ['class' => 'btn btn-lg btn-primary']) ?>
    </p>
</div>

<div class="body-content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-clock"></i> Ostatnio dodane książki
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($recentBooks as $book): ?>
                            <div class="col-md-4 mb-3">
                                <div class="card book-card h-100">
                                    <img src="<?= $book->getCoverUrl() ?>" class="card-img-top book-cover" alt="<?= Html::encode($book->title) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= Html::encode($book->title) ?></h5>
                                        <p class="card-text"><?= Html::encode($book->author) ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <?= Html::a('Zobacz', ['/book/view', 'id' => $book->id], ['class' => 'btn btn-sm btn-info btn-block']) ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-pie"></i> Statystyki
                </div>
                <div class="card-body">
                    <p>Łączna liczba książek: <strong><?= $totalBooks ?></strong></p>
                    <h5>Książki według kategorii:</h5>
                    <ul class="list-group">
                        <?php foreach ($categoryCounts as $category): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= Html::encode($category['name']) ?>
                                <span class="badge badge-primary badge-pill"><?= $category['book_count'] ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>