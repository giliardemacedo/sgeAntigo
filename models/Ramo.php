<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ramo".
 *
 * @property int $idramo
 * @property string $nome
 *
 * @property Escoteiro[] $escoteiros
 */
class Ramo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ramo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idramo' => Yii::t('app', 'Idramo'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idramo' => 'idramo']);
    }
}
