<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chefe".
 *
 * @property int $idchefe
 * @property int $idescoteiro
 * @property string $categoria
 */
class Chefe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chefe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idescoteiro', 'categoria'], 'required'],
            [['idescoteiro'], 'integer'],
            [['categoria'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idchefe' => Yii::t('app', 'Idchefe'),
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'categoria' => Yii::t('app', 'Categoria'),
        ];
    }
}
