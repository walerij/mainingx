<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Add new user';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        <i class="glyphicon glyphicon-user">
        </i>
        &nbsp;Добавить пользователя
    </div>
    <div class="panel-body">
        <?php $form= ActiveForm::begin()?>
        <?= $form->field($AddUser, 'email') ?>
        <?= $form->field($AddUser, 'password')->passwordInput()->label('Пароль') ?>
        <?//= $form->field($AddUser, 'cashetype') ?>
        <?=$form->field($AddUser, 'cashetype')->dropDownList([
            'Яндекс' => 'Яндекс',
            'WebMoney' => 'WebMoney',
            'KIWI' => 'KIWI',
                       ],
            [
                'prompt' => 'Выберите вариант платежной системы'
            ])->label('Платежная система'); ?>
        <?= $form->field($AddUser, 'cashenumber')->label('Номер кошелька') ?>

        <button type="submit" class="btn btn-success">
            <i class="glyphicon glyphicon-ok"></i>&nbsp;
            Зарегистрировать
        </button>
        <?php        ActiveForm::end(); ?>

    </div>
</div>
