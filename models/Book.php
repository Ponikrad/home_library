<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public $imageFile;

    
    public static function tableName()
    {
        return '{{%book}}';
    }

    public function rules()
    {
        return [
            [['title', 'author'], 'required'],
            [['publication_year', 'category_id', 'pages'], 'integer'],
            [['description'], 'string'],
            [['title', 'author', 'publisher', 'cover_image'], 'string', 'max' => 255],
            [['isbn'], 'string', 'max' => 20],
            [['status'], 'string', 'max' => 50],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tytuł',
            'author' => 'Autor',
            'isbn' => 'ISBN',
            'publication_year' => 'Rok publikacji',
            'publisher' => 'Wydawnictwo',
            'category_id' => 'Kategoria',
            'description' => 'Opis',
            'cover_image' => 'Okładka',
            'pages' => 'Liczba stron',
            'status' => 'Status',
            'created_at' => 'Data dodania',
            'updated_at' => 'Data aktualizacji',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
    
    public function upload()
    {
        if ($this->imageFile) {
            $filename = 'book_' . time() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs('uploads/covers/' . $filename);
            $this->cover_image = $filename;
            return true;
        }
        return true;
    }
    
    public function getCoverUrl()
    {
        return $this->cover_image 
            ? Yii::$app->request->baseUrl . '/uploads/covers/' . $this->cover_image 
            : Yii::$app->request->baseUrl . '/img/no-cover.jpg';
    }

    
}