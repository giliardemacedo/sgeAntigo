<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha".
 *
 * @property int $idpatrulha
 * @property string $nome
 * @property string $grito_guerra
 * @property int $tropa_idtropa
 * @property int $tropa_secao_idsecao
 *
 * @property Tropa $tropaIdtropa
 * @property PatrulhaHasEscoteiro[] $patrulhaHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
 */
class Patrulha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrulha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'tropa_idtropa', 'tropa_secao_idsecao'], 'required'],
            [['tropa_idtropa', 'tropa_secao_idsecao'], 'integer'],
            [['nome', 'grito_guerra'], 'string', 'max' => 45],
            [['tropa_idtropa', 'tropa_secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Tropa::className(), 'targetAttribute' => ['tropa_idtropa' => 'idtropa', 'tropa_secao_idsecao' => 'secao_idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpatrulha' => 'Idpatrulha',
            'nome' => 'Nome',
            'grito_guerra' => 'Grito Guerra',
            'tropa_idtropa' => 'Tropa Idtropa',
            'tropa_secao_idsecao' => 'Tropa Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTropaIdtropa()
    {
        return $this->hasOne(Tropa::className(), ['idtropa' => 'tropa_idtropa', 'secao_idsecao' => 'tropa_secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulhaHasEscoteiros()
    {
        return $this->hasMany(PatrulhaHasEscoteiro::className(), ['patrulha_idpatrulha' => 'idpatrulha']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('patrulha_has_escoteiro', ['patrulha_idpatrulha' => 'idpatrulha']);
    }
}
