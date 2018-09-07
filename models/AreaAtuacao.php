<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_atuacao".
 *
 * @property int $idareaatuacao
 * @property int $idatividade
 * @property string $nome
 * @property int $quantidade
 *
 * @property Atividade $atividade
 */
class AreaAtuacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_atuacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idatividade', 'nome', 'quantidade'], 'required'],
            [['idatividade', 'quantidade'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idatividade'], 'exist', 'skipOnError' => true, 'targetClass' => Atividade::className(), 'targetAttribute' => ['idatividade' => 'idatividade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idareaatuacao' => Yii::t('app', 'Idareaatuacao'),
            'idatividade' => Yii::t('app', 'Idatividade'),
            'nome' => Yii::t('app', 'Nome'),
            'quantidade' => Yii::t('app', 'Quantidade'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividade()
    {
        return $this->hasOne(Atividade::className(), ['idatividade' => 'idatividade']);
    }
}
