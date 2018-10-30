<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escoteiro".
 *
 * @property int $idescoteiro
<<<<<<< HEAD
=======
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
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 * @property string $nome
 * @property string $nascimento
 * @property string $cpf
 * @property string $rg
<<<<<<< HEAD
 * @property string $sexo
 * @property string $registro_ueb
 * @property string $estado
 * @property string $encargo_patrulha
 * @property string $chefe
 * @property string $categoria_chefe
 * @property int $endereco_idendereco
 * @property int $contato_idcontato
 *
 * @property ClaHasEscoteiro[] $claHasEscoteiros
 * @property Cla[] $claIdclas
 * @property Contato $contatoIdcontato
 * @property Endereco $enderecoIdendereco
 * @property FlorDeLisHasEscoteiro[] $florDeLisHasEscoteiros
 * @property FlorDeLis[] $florDeLisIdflorDeLis
 * @property MatilhaHasEscoteiro[] $matilhaHasEscoteiros
 * @property Matilha[] $matilhaIdmatilhas
 * @property PatrulhaHasEscoteiro[] $patrulhaHasEscoteiros
 * @property Patrulha[] $patrulhaIdpatrulhas
=======
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
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registro_ueb', 'estado', 'endereco_idendereco', 'contato_idcontato'], 'required'],
            [['nascimento'], 'safe'],
            [['endereco_idendereco', 'contato_idcontato'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['cpf', 'rg', 'estado', 'encargo_patrulha', 'chefe', 'categoria_chefe'], 'string', 'max' => 45],
            [['sexo'], 'string', 'max' => 1],
            [['registro_ueb'], 'string', 'max' => 15],
            [['contato_idcontato'], 'exist', 'skipOnError' => true, 'targetClass' => Contato::className(), 'targetAttribute' => ['contato_idcontato' => 'idcontato']],
            [['endereco_idendereco'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['endereco_idendereco' => 'idendereco']],
=======
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
            'idescoteiro' => 'Idescoteiro',
            'nome' => 'Nome',
            'nascimento' => 'Nascimento',
            'cpf' => 'CPF',
            'rg' => 'RG',
            'sexo' => 'Sexo',
            'registro_ueb' => 'Registro Na UEB',
            'estado' => 'Estado',
            'encargo_patrulha' => 'Encargo Patrulha',
            'chefe' => 'Chefe',
            'categoria_chefe' => 'Categoria Chefe',
            'endereco_idendereco' => 'Endereco Idendereco',
            'contato_idcontato' => 'Contato Idcontato',
=======
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
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getClaHasEscoteiros()
    {
        return $this->hasMany(ClaHasEscoteiro::className(), ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaIdclas()
    {
        return $this->hasMany(Cla::className(), ['idcla' => 'cla_idcla', 'secao_idsecao' => 'cla_secao_idsecao'])->viaTable('cla_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContatoIdcontato()
    {
        return $this->hasOne(Contato::className(), ['idcontato' => 'contato_idcontato']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecoIdendereco()
    {
        return $this->hasOne(Endereco::className(), ['idendereco' => 'endereco_idendereco']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlorDeLisHasEscoteiros()
    {
        return $this->hasMany(FlorDeLisHasEscoteiro::className(), ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlorDeLisIdflorDeLis()
    {
        return $this->hasMany(FlorDeLis::className(), ['idflor_de_lis' => 'flor_de_lis_idflor_de_lis', 'secao_idsecao' => 'flor_de_lis_secao_idsecao'])->viaTable('flor_de_lis_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatilhaHasEscoteiros()
    {
        return $this->hasMany(MatilhaHasEscoteiro::className(), ['escoteiro_idescoteiro' => 'idescoteiro']);
=======
<<<<<<< HEAD
    public function getSecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'idsecao']);
=======
    public function getCheves()
    {
        return $this->hasMany(Chefe::className(), ['idescoteiro' => 'idescoteiro']);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getMatilhaIdmatilhas()
    {
        return $this->hasMany(Matilha::className(), ['idmatilha' => 'matilha_idmatilha'])->viaTable('matilha_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
=======
    public function getPatrulha()
    {
        return $this->hasOne(Patrulha::className(), ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getPatrulhaHasEscoteiros()
    {
        return $this->hasMany(PatrulhaHasEscoteiro::className(), ['escoteiro_idescoteiro' => 'idescoteiro']);
=======
    public function getRamo()
    {
        return $this->hasOne(Ramo::className(), ['idramo' => 'idramo']);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getPatrulhaIdpatrulhas()
    {
        return $this->hasMany(Patrulha::className(), ['idpatrulha' => 'patrulha_idpatrulha'])->viaTable('patrulha_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
=======
    public function getGrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'idgrupo']);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }
}
