<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $idendereco
 * @property int $idescoteiro
 * @property string $logradouro
 * @property string $bairro
 * @property string $numerocasa
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idescoteiro', 'logradouro', 'bairro', 'numerocasa'], 'required'],
            [['idescoteiro'], 'integer'],
            [['logradouro'], 'string', 'max' => 45],
            [['bairro'], 'string', 'max' => 30],
            [['numerocasa'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idendereco' => Yii::t('app', 'Idendereco'),
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'logradouro' => Yii::t('app', 'Logradouro'),
            'bairro' => Yii::t('app', 'Bairro'),
            'numerocasa' => Yii::t('app', 'Numerocasa'),
        ];
    }
}
