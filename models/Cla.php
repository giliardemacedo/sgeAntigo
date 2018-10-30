<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cla".
 *
 * @property int $idcla
 * @property string $nome
 * @property int $secao_idsecao
 *
 * @property Secao $secaoIdsecao
 * @property ClaHasEscoteiro[] $claHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
 */
class Cla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'secao_idsecao'], 'required'],
            [['secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcla' => 'Idcla',
            'nome' => 'Nome',
            'secao_idsecao' => 'Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecaoIdsecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaHasEscoteiros()
    {
        return $this->hasMany(ClaHasEscoteiro::className(), ['cla_idcla' => 'idcla', 'cla_secao_idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('cla_has_escoteiro', ['cla_idcla' => 'idcla', 'cla_secao_idsecao' => 'secao_idsecao']);
    }
}
