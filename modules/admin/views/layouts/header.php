<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">


                <!-- User Account: style can be found in dropdown.less -->
                <li>
                    <div class="pull-right" style="margin: 10px">
                        <?= Html::a(
                            'Sign out',
                            ['/auth/logout'],
                            ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                        ) ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
