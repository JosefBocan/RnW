<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property string $idNews
 * @property string $title
 * @property string $comment
 * @property string $createdAt
 * @property string $activeTo
 * @property integer $active
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'comment'], 'string'],
            [['createdAt', 'activeTo'], 'safe'],
            [['active'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNews' => Yii::t('app', 'Id News'),
            'title' => Yii::t('app', 'Title'),
            'comment' => Yii::t('app', 'Comment'),
            'createdAt' => Yii::t('app', 'Created At'),
            'activeTo' => Yii::t('app', 'Active To'),
            'active' => Yii::t('app', 'Active'),
        ];
    }
}
