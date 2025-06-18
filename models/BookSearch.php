<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Book;

class BookSearch extends Model
{
    public $id;
    public $title;
    public $author;
    public $category_id;
    public $status;
    public $publication_year;

    public function rules()
    {
        return [
            [['id', 'category_id',  'publication_year'], 'integer'],
            [['title', 'author', 'status'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Book::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'title' => SORT_ASC,
                ]
            ],
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'category_id' => $this->category_id,
            'publication_year' => $this->publication_year,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}