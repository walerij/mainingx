<?php

use yii\db\Migration;

/**
 * Handles the creation of table `earnings`.
 */
class m171202_165004_create_earnings_table extends Migration
{
    /**
     * @inheritdoc
     *
     * таблица заработка
     *
     */
    public function up()
    {
        $this->createTable('earnings', [
            'id' => $this->primaryKey(),
            'user_id' =>$this->integer(),
            'total_hashes'=>$this->float(),//всего хешей
            'total_due'=>$this->float(),//всего заработано
            'total_paid'=>$this->float(),//всего выпдачено
            'hash_rate'=>$this->float(),//скорость хешей
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('earnings');
    }
}
