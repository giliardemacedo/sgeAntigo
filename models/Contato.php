<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idcontato
 * @property int $idescoteiro
 * @property string $numerotelefone
 * @property string $email
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idescoteiro', 'numerotelefone', 'email'], 'required'],
            [['idescoteiro'], 'integer'],
            [['numerotelefone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcontato' => Yii::t('app', 'Idcontato'),
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'numerotelefone' => Yii::t('app', 'Numerotelefone'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
