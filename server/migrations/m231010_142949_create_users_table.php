<?php

declare(strict_types=1);

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m231010_142949_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(): void
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            'last_name' => $this->string()->notNull(),
            'first_name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown(): void
    {
        $this->dropTable('{{%users}}');
    }
}
