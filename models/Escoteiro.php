<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escoteiro".
 *
 * @property int $idescoteiro
<<<<<<< HEAD
 * @property int $idsecao
 * @property int $idcontato
 * @property int $idendereco
=======
 * @property int $idgrupo
 * @property int $idramo
 * @property int $idtropa
 * @property int $idpatrulha
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $nome
 * @property string $nascimento
 * @property string $cpf
 * @property string $rg
<<<<<<< HEAD
 * @property string $sexo
 * @property string $registroueb
 * @property int $estado
 *
 * @property Secao $secao
=======
 * @property string $sexo O sexo será representado por um caractere, se for 'f' é feminino e 'm' para representar masculino.
 * @property string $registroueb
 * @property int $estado Irá informar se o membro está ativo ou não.  0 - ativo, 1 - não está ativo.
 *
 * @property Chefe[] $cheves
 * @property Patrulha $patrulha
 * @property Ramo $ramo
 * @property Grupo $grupo
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
<<<<<<< HEAD
            [['idsecao', 'idcontato', 'idendereco', 'nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registroueb', 'estado'], 'required'],
            [['idsecao', 'idcontato', 'idendereco', 'estado'], 'integer'],
            [['nascimento'], 'safe'],
            [['nome'], 'string', 'max' => 60],
            [['cpf', 'rg'], 'string', 'max' => 20],
            [['sexo'], 'string', 'max' => 1],
            [['registroueb'], 'string', 'max' => 35],
            [['idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['idsecao' => 'idsecao']],
=======
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
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
<<<<<<< HEAD
            'idsecao' => Yii::t('app', 'Idsecao'),
            'idcontato' => Yii::t('app', 'Idcontato'),
            'idendereco' => Yii::t('app', 'Idendereco'),
            'nome' => Yii::t('app', 'Nome'),
            'nascimento' => Yii::t('app', 'Nascimento'),
            'cpf' => Yii::t('app', 'Cpf'),
            'rg' => Yii::t('app', 'Rg'),
            'sexo' => Yii::t('app', 'Sexo'),
            'registroueb' => Yii::t('app', 'Registroueb'),
=======
            'idgrupo' => Yii::t('app', 'Grupo'),
            'idramo' => Yii::t('app', 'Ramo'),
            'idtropa' => Yii::t('app', 'Tropa'),
            'idpatrulha' => Yii::t('app', 'Patrulha'),
            'nome' => Yii::t('app', 'Nome'),
            'nascimento' => Yii::t('app', 'Nascimento'),
            'cpf' => Yii::t('app', 'CPF'),
            'rg' => Yii::t('app', 'RG'),
            'sexo' => Yii::t('app', 'Sexo'),
            'registroueb' => Yii::t('app', 'Registro UEB'),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'estado' => Yii::t('app', 'Estado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getSecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'idsecao']);
=======
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
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    }
}
