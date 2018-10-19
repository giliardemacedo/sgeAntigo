<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escoteiro".
 *
 * @property int $idescoteiro
 * @property int $idsecao
 * @property int $idcontato
 * @property int $idendereco
 * @property string $nome
 * @property string $nascimento
 * @property string $cpf
 * @property string $rg
 * @property string $sexo
 * @property string $registroueb
 * @property int $estado
 *
 * @property Secao $secao
 */
class Escoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsecao', 'idcontato', 'idendereco', 'nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registroueb', 'estado'], 'required'],
            [['idsecao', 'idcontato', 'idendereco', 'estado'], 'integer'],
            [['nascimento'], 'safe'],
            [['nome'], 'string', 'max' => 60],
            [['cpf', 'rg'], 'string', 'max' => 20],
            [['sexo'], 'string', 'max' => 1],
            [['registroueb'], 'string', 'max' => 35],
            [['idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['idsecao' => 'idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'idcontato' => Yii::t('app', 'Idcontato'),
            'idendereco' => Yii::t('app', 'Idendereco'),
            'nome' => Yii::t('app', 'Nome'),
            'nascimento' => Yii::t('app', 'Nascimento'),
            'cpf' => Yii::t('app', 'Cpf'),
            'rg' => Yii::t('app', 'Rg'),
            'sexo' => Yii::t('app', 'Sexo'),
            'registroueb' => Yii::t('app', 'Registroueb'),
            'estado' => Yii::t('app', 'Estado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'idsecao']);
    }
}
