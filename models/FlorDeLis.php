<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flor_de_lis".
 *
 * @property int $idflor_de_lis
 * @property string $nome
 * @property int $secao_idsecao
 *
 * @property Secao $secaoIdsecao
 * @property FlorDeLisHasEscoteiro[] $florDeLisHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
 */
class FlorDeLis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flor_de_lis';
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
            'idflor_de_lis' => 'Idflor De Lis',
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
    public function getFlorDeLisHasEscoteiros()
    {
        return $this->hasMany(FlorDeLisHasEscoteiro::className(), ['flor_de_lis_idflor_de_lis' => 'idflor_de_lis', 'flor_de_lis_secao_idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('flor_de_lis_has_escoteiro', ['flor_de_lis_idflor_de_lis' => 'idflor_de_lis', 'flor_de_lis_secao_idsecao' => 'secao_idsecao']);
    }
}
