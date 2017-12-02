<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171202_164604_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'email'=>$this->string(),
            'password'=>$this->string(),
            'cashetype'=>$this->string(),
            'cashenumber'=>$this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
