<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "secao".
 *
 * @property int $idsecao
<<<<<<< HEAD
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
=======
 * @property int $idgrupo
 * @property string $nome
 * @property string $tipo
 *
 * @property Escoteiro[] $escoteiros
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['nome', 'grupo_idgrupo'], 'required'],
            [['grupo_idgrupo'], 'integer'],
            [['nome', 'tipo'], 'string', 'max' => 80],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
=======
            [['idgrupo', 'nome', 'tipo'], 'required'],
            [['idgrupo'], 'integer'],
            [['nome', 'tipo'], 'string', 'max' => 60],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'idsecao' => 'Idsecao',
            'nome' => 'Nome',
            'tipo' => 'Tipo',
            'grupo_idgrupo' => 'Grupo',
=======
            'idsecao' => Yii::t('app', 'Idsecao'),
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'nome' => Yii::t('app', 'Nome'),
            'tipo' => Yii::t('app', 'Tipo'),
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
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
=======
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idsecao' => 'idsecao']);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }
}
