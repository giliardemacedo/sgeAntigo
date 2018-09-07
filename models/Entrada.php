<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrada".
 *
 * @property int $caixa_idcaixa
 * @property double $valor
 * @property string $data
 * @property string $descricao
 * @property string $comprovante
 * @property string $entradacol
 *
 * @property Caixa $caixaIdcaixa
 */
class Entrada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caixa_idcaixa', 'valor'], 'required'],
            [['caixa_idcaixa'], 'integer'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
            [['comprovante'], 'string', 'max' => 50],
            [['entradacol'], 'string', 'max' => 45],
            [['caixa_idcaixa'], 'exist', 'skipOnError' => true, 'targetClass' => Caixa::className(), 'targetAttribute' => ['caixa_idcaixa' => 'idcaixa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'caixa_idcaixa' => Yii::t('app', 'Caixa Idcaixa'),
            'valor' => Yii::t('app', 'Valor'),
            'data' => Yii::t('app', 'Data'),
            'descricao' => Yii::t('app', 'Descricao'),
            'comprovante' => Yii::t('app', 'Comprovante'),
            'entradacol' => Yii::t('app', 'Entradacol'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaIdcaixa()
    {
        return $this->hasOne(Caixa::className(), ['idcaixa' => 'caixa_idcaixa']);
    }
}
