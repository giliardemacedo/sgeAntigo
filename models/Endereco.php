<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $idendereco
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
            [['logradouro', 'bairro', 'numerocasa'], 'required'],
            [['logradouro', 'bairro', 'numerocasa'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idendereco' => Yii::t('app', 'Idendereco'),
            'logradouro' => Yii::t('app', 'Logradouro'),
            'bairro' => Yii::t('app', 'Bairro'),
            'numerocasa' => Yii::t('app', 'Numerocasa'),
        ];
    }
}
