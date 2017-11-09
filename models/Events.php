<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property string $idEvents
 * @property string $idCategories
 * @property string $title
 * @property string $info
 * @property string $link
 * @property string $date
 * @property string $createdAt
 * @property integer $active
 *
 * @property Eventscategories $idCategories0
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idCategories', 'active'], 'integer'],
            [['title', 'info', 'link'], 'string'],
            [['date', 'createdAt'], 'safe'],
            [['idCategories'], 'exist', 'skipOnError' => true, 'targetClass' => Eventscategories::className(), 'targetAttribute' => ['idCategories' => 'idCategories']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idEvents' => Yii::t('app', 'Id Events'),
            'idCategories' => Yii::t('app', 'Kategorie'),
            'title' => Yii::t('app', 'Název'),
            'info' => Yii::t('app', 'Informace '),
            'link' => Yii::t('app', 'Facebook - link'),
            'date' => Yii::t('app', 'Datum události'),
            'createdAt' => Yii::t('app', 'Created At'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategories0()
    {
        return $this->hasOne(Eventscategories::className(), ['idCategories' => 'idCategories']);
    }
}
