<?php

use yii\db\Migration;

class m170924_094228_init extends Migration
{
    public function safeUp()
    {
        $this->createTable('News',[
            "idNews" => $this->bigPrimaryKey()->notNull()->unique(),
            "title" => $this->text(),
            "comment" => $this->text(),
            "createdAt" => $this->timestamp(),
            "activeTo"  =>  $this->date(),
            "active" => $this->boolean()->defaultValue(1),
        ]);

        $this->createTable('Events', [
            'idEvents' => $this->bigPrimaryKey()->notNull()->unique(),
            'idCategories'=> $this->bigInteger(20),
            'title' => $this->text(),
            'info' => $this->text(),
            "link"  => $this->text(),
            'date' => $this->date(),
            'createdAt' => $this->timestamp(),
            'active' => $this -> boolean()->defaultValue(1),
        ]);

        $this->createTable('EventsCategories',[
            "idCategories" => $this->bigPrimaryKey()->notNull()->unique(),
            "Name" => $this->text(),
            "picture"  => $this->text(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('News');
        $this->dropTable('Events');
        $this->dropTable('EventsCategories');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170924_094228_init cannot be reverted.\n";

        return false;
    }
    */
}
