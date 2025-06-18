<?php


use yii\db\Migration;

class m220101_000000_create_book_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'author' => $this->string(255)->notNull(),
            'isbn' => $this->string(20),
            'publication_year' => $this->integer(),
            'publisher' => $this->string(255),
            'category_id' => $this->integer(),
            'description' => $this->text(),
            'cover_image' => $this->string(255),
            'pages' => $this->integer(),
            'status' => $this->string(50)->defaultValue('dostępna'),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);

        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull()->unique(),
            'description' => $this->text(),
        ]);

        $this->addForeignKey(
            'fk-book-category_id',
            '{{%book}}',
            'category_id',
            '{{%category}}',
            'id',
            'SET NULL'
        );

        $this->batchInsert('{{%category}}', ['name', 'description'], [
            ['Fantastyka', 'Książki fantasy, science fiction i inne fantastyczne'],
            ['Kryminał', 'Powieści kryminalne i thrillery'],
            ['Literatura piękna', 'Klasyczna i współczesna literatura piękna'],
            ['Literatura faktu', 'Biografie, reportaże, historia'],
            ['Nauka', 'Książki naukowe i popularnonaukowe'],
        ]);
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-book-category_id', '{{%book}}');
        $this->dropTable('{{%book}}');
        $this->dropTable('{{%category}}');
    }
}