<?php

use yii\db\Migration;

/**
 * Handles the creation of table `paymenthistory`.
 */
class m171202_165701_create_paymenthistory_table extends Migration
{
    /**
     * @inheritdoc
     * история платежей
     */
    public function up()
    {
        $this->createTable('paymenthistory', [
            'id' => $this->primaryKey(),
            'user_id'=>$this->integer(),
            'date_pay'=>$this->dateTime(),
            ''
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('paymenthistory');
    }
}
