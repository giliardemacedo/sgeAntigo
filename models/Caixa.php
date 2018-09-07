<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property int $idcaixa
 * @property double $valor
 * @property string $responsavel
 * @property string $descricao Esse campo serve para informa o motivo pelo qual houve a entrada ou saída de dinheiro.
 * @property string $data
 *
 * @property Chefe[] $cheves
 * @property Entrada[] $entradas
 * @property Saída $saída
 */
class Caixa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caixa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valor', 'responsavel', 'descricao', 'data'], 'required'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['responsavel'], 'string', 'max' => 25],
            [['descricao'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcaixa' => Yii::t('app', 'Idcaixa'),
            'valor' => Yii::t('app', 'Valor'),
            'responsavel' => Yii::t('app', 'Responsavel'),
            'descricao' => Yii::t('app', 'Descricao'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheves()
    {
        return $this->hasMany(Chefe::className(), ['caixa_idcaixa' => 'idcaixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntradas()
    {
        return $this->hasMany(Entrada::className(), ['caixa_idcaixa' => 'idcaixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaída()
    {
        return $this->hasOne(Saída::className(), ['caixa_idcaixa' => 'idcaixa']);
    }
}
