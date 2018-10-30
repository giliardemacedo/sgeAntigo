<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_atuacao".
 *
 * @property int $idarea_atuacao
 * @property string $nome
 *
 * @property Atividade[] $atividades
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
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idarea_atuacao' => 'Idarea Atuacao',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividades()
    {
        return $this->hasMany(Atividade::className(), ['area_atuacao_idarea_atuacao' => 'idarea_atuacao']);
    }
}
