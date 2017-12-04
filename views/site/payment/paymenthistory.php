<?php
$this->title = 'История платежей';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-success">
    <div class="panel-heading">
        Пользователь
    </div>
    <div class="panel-body">
        <div class="row ">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <? foreach ($AddUser as $user_) {
                        ?>
                        <h3>email: <strong><?= $user_->email ?></strong></h3>
                        <h3>Кошелек: <strong><?= $user_->cashetype ?></strong></h3>
                        <h3>Счет: <strong><?= $user_->cashenumber ?></strong></h3>
                    </div>
                    <div class="col-lg-6 col-md-6 jumbotron">
                        <a class="btn btn-info btn-block" href="/site/addpayment/" title="Добавить платеж">
                            <i class="glyphicon glyphicon-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-hover">
                            <tr>
                                <th>№</th>
                                <th>Дата платежа</th>
                                <th>Сумма платежа</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2017-12-04</td>
                                <td>1000000</td>
                            </tr>
                        </table>
                    </div>
                </div><!---row-->
                <?
                }?>
            </div>
        </div>


    </div> <!--body--->
</div><!---panel--->

