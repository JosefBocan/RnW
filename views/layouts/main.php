<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use bluezed\scrollTop\ScrollTop;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('/img/RnW_Logo.png', ['alt' => 'RocknWall', 'class' => 'logo']) . 'Rock\'n\'Wall',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top menu',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right '],
        'items' => [
            ['label' => 'Domů', 'url' => ['/view/index', '#'=>'home']],
            ['label' => 'Kalendář akcí', 'url' => ['/view/index', '#'=>'events']],
            ['label' => 'Lezecké kurzy', 'url' => ['/view/index', '#'=>'courses']],
            ['label' => 'Galerie', 'url' => ['/view/index', '#'=>'galerie']],

            YII::$app->user->isGuest ? '': ['label' => 'Administrace', 'url' => ['/events/index']],

            Yii::$app->user->isGuest ? '' : (
                '<li>'
                . Html::beginForm(['/site/logout'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid main">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?= $content ?>

    </div>


</div>


<footer class="footer footer-style">
    <div class="container ">
        <p class="text-center">&copy; Rock´n´Wall <?= date('Y') ?></p>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
