<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\form\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?= 'Генерация Word документов' ?></h1>
<div class="container">
        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Сгенерировать докумен', ['class' => 'btn btn-primary', 'name' => 'generate-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
</div>
