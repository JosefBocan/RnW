<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eventscategories".
 *
 * @property string $idCategories
 * @property string $Name
 * @property string $picture
 *
 * @property Events[] $events
 */
class Eventscategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eventscategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'picture'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idCategories' => Yii::t('app', 'Id Categories'),
            'Name' => Yii::t('app', 'Name'),
            'picture' => Yii::t('app', 'Picture'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Events::className(), ['idCategories' => 'idCategories']);
    }
}
