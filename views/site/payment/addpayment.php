<?php 
$this->title = 'Добавление платежа';
$this->params['breadcrumbs'][] = $this->title;

?>
добавление платежа
<?php

foreach ($payment as $pay)
{
    echo '===='.$pay->user_id;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

