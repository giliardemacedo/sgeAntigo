<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "secao".
 *
 * @property int $idsecao
 * @property string $nome
 * @property string $tipo
 * @property int $grupo_idgrupo
 *
 * @property Alcateia[] $alcateias
 * @property Atividade[] $atividades
 * @property Cla[] $clas
 * @property FlorDeLis[] $florDeLis
 * @property Grupo $grupoIdgrupo
 * @property Tropa[] $tropas
 */
class Secao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'secao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'grupo_idgrupo'], 'required'],
            [['grupo_idgrupo'], 'integer'],
            [['nome', 'tipo'], 'string', 'max' => 80],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsecao' => 'Idsecao',
            'nome' => 'Nome',
            'tipo' => 'Tipo',
            'grupo_idgrupo' => 'Grupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlcateias()
    {
        return $this->hasMany(Alcateia::className(), ['idsecao' => 'idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtividades()
    {
        return $this->hasMany(Atividade::className(), ['secao_idsecao' => 'idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClas()
    {
        return $this->hasMany(Cla::className(), ['secao_idsecao' => 'idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlorDeLis()
    {
        return $this->hasMany(FlorDeLis::className(), ['secao_idsecao' => 'idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTropas()
    {
        return $this->hasMany(Tropa::className(), ['secao_idsecao' => 'idsecao']);
    }
}
