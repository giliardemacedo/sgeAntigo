<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flor_de_lis_has_escoteiro".
 *
 * @property int $flor_de_lis_idflor_de_lis
 * @property int $flor_de_lis_secao_idsecao
 * @property int $escoteiro_idescoteiro
 *
 * @property Escoteiro $escoteiroIdescoteiro
 * @property FlorDeLis $florDeLisIdflorDeLis
 */
class FlorDeLisHasEscoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flor_de_lis_has_escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flor_de_lis_idflor_de_lis', 'flor_de_lis_secao_idsecao', 'escoteiro_idescoteiro'], 'required'],
            [['flor_de_lis_idflor_de_lis', 'flor_de_lis_secao_idsecao', 'escoteiro_idescoteiro'], 'integer'],
            [['flor_de_lis_idflor_de_lis', 'flor_de_lis_secao_idsecao', 'escoteiro_idescoteiro'], 'unique', 'targetAttribute' => ['flor_de_lis_idflor_de_lis', 'flor_de_lis_secao_idsecao', 'escoteiro_idescoteiro']],
            [['escoteiro_idescoteiro'], 'exist', 'skipOnError' => true, 'targetClass' => Escoteiro::className(), 'targetAttribute' => ['escoteiro_idescoteiro' => 'idescoteiro']],
            [['flor_de_lis_idflor_de_lis', 'flor_de_lis_secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => FlorDeLis::className(), 'targetAttribute' => ['flor_de_lis_idflor_de_lis' => 'idflor_de_lis', 'flor_de_lis_secao_idsecao' => 'secao_idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'flor_de_lis_idflor_de_lis' => 'Flor De Lis Idflor De Lis',
            'flor_de_lis_secao_idsecao' => 'Flor De Lis Secao Idsecao',
            'escoteiro_idescoteiro' => 'Escoteiro Idescoteiro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiro()
    {
        return $this->hasOne(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlorDeLisIdflorDeLis()
    {
        return $this->hasOne(FlorDeLis::className(), ['idflor_de_lis' => 'flor_de_lis_idflor_de_lis', 'secao_idsecao' => 'flor_de_lis_secao_idsecao']);
    }
}
