<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "escoteiro".
 *
 * @property int $idescoteiro
 * @property string $nome
 * @property string $nascimento
 * @property string $cpf
 * @property string $rg
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
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registro_ueb', 'estado', 'endereco_idendereco', 'contato_idcontato'], 'required'],
            [['nascimento'], 'safe'],
            [['endereco_idendereco', 'contato_idcontato'], 'integer'],
            [['nome'], 'string', 'max' => 60],
            [['cpf', 'rg', 'estado', 'encargo_patrulha', 'chefe', 'categoria_chefe'], 'string', 'max' => 45],
            [['sexo'], 'string', 'max' => 1],
            [['registro_ueb'], 'string', 'max' => 15],
            [['contato_idcontato'], 'exist', 'skipOnError' => true, 'targetClass' => Contato::className(), 'targetAttribute' => ['contato_idcontato' => 'idcontato']],
            [['endereco_idendereco'], 'exist', 'skipOnError' => true, 'targetClass' => Endereco::className(), 'targetAttribute' => ['endereco_idendereco' => 'idendereco']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
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
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatilhaIdmatilhas()
    {
        return $this->hasMany(Matilha::className(), ['idmatilha' => 'matilha_idmatilha'])->viaTable('matilha_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulhaHasEscoteiros()
    {
        return $this->hasMany(PatrulhaHasEscoteiro::className(), ['escoteiro_idescoteiro' => 'idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulhaIdpatrulhas()
    {
        return $this->hasMany(Patrulha::className(), ['idpatrulha' => 'patrulha_idpatrulha'])->viaTable('patrulha_has_escoteiro', ['escoteiro_idescoteiro' => 'idescoteiro']);
    }
}
