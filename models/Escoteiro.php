<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escoteiro".
 *
 * @property int $idescoteiro
 * @property int $idgrupo
 * @property int $idramo
 * @property int $idtropa
 * @property int $idpatrulha
 * @property string $nome
 * @property string $nascimento
 * @property string $cpf
 * @property string $rg
 * @property string $sexo O sexo será representado por um caractere, se for 'f' é feminino e 'm' para representar masculino.
 * @property string $registroueb
 * @property int $estado Irá informar se o membro está ativo ou não.  0 - ativo, 1 - não está ativo.
 *
 * @property Chefe[] $cheves
 * @property Patrulha $patrulha
 * @property Ramo $ramo
 * @property Grupo $grupo
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
            [['idgrupo', 'idramo', 'idtropa', 'idpatrulha', 'nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registroueb', 'estado'], 'required'],
            [['idgrupo', 'idramo', 'idtropa', 'idpatrulha', 'estado'], 'integer'],
            [['nascimento'], 'safe'],
            [['nome'], 'string', 'max' => 45],
            [['cpf'], 'string', 'max' => 20],
            [['rg', 'registroueb'], 'string', 'max' => 30],
            [['sexo'], 'string', 'max' => 1],
            [['idpatrulha', 'idtropa'], 'exist', 'skipOnError' => true, 'targetClass' => Patrulha::className(), 'targetAttribute' => ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']],
            [['idramo'], 'exist', 'skipOnError' => true, 'targetClass' => Ramo::className(), 'targetAttribute' => ['idramo' => 'idramo']],
            [['idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['idgrupo' => 'idgrupo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'idramo' => Yii::t('app', 'Idramo'),
            'idtropa' => Yii::t('app', 'Idtropa'),
            'idpatrulha' => Yii::t('app', 'Idpatrulha'),
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
    public function getCheves()
    {
        return $this->hasMany(Chefe::className(), ['idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulha()
    {
        return $this->hasOne(Patrulha::className(), ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRamo()
    {
        return $this->hasOne(Ramo::className(), ['idramo' => 'idramo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'idgrupo']);
    }
}
