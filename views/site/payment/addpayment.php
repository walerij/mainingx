<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Добавление платежа';
$this->params['breadcrumbs'][] = $this->title;
?>





       <?php $form = ActiveForm::begin() ?>

       <?= $form->field($payment, 'date_pay')->label('Дата платежа') ?>
       <?= $form->field($payment, 'sum_pay')->label('Сумма платежа') ?>
       <button class="btn btn-success" type="submit">
           <i class="glyphicon glyphicon-ok"></i>
           Сохранить платеж
       </button>
       <?= $form->field($payment, 'user_id')->hiddenInput()->label('') ?>
       <? ActiveForm::end() ?>



