
<div class="jumbotron">
    <h3>Спасибо!</h3>
    <h4>В систему был добавлен следующий пользователь:</h4>
    <? foreach ($AddUser as $user_) {
        ?>
        <h3>--<?=$user_->email?></h3>
        <?
    }?>

</div>

