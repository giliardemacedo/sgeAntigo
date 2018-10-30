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
 *
 * @property Escoteiro[] $escoteiros
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
            'idendereco' => 'Idendereco',
            'logradouro' => 'Logradouro',
            'bairro' => 'Bairro',
            'numerocasa' => 'Numerocasa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['endereco_idendereco' => 'idendereco']);
    }
}
