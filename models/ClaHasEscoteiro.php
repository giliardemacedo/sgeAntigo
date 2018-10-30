<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cla_has_escoteiro".
 *
 * @property int $cla_idcla
 * @property int $cla_secao_idsecao
 * @property int $escoteiro_idescoteiro
 *
 * @property Cla $claIdcla
 * @property Escoteiro $escoteiroIdescoteiro
 */
class ClaHasEscoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cla_has_escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cla_idcla', 'cla_secao_idsecao', 'escoteiro_idescoteiro'], 'required'],
            [['cla_idcla', 'cla_secao_idsecao', 'escoteiro_idescoteiro'], 'integer'],
            [['cla_idcla', 'cla_secao_idsecao', 'escoteiro_idescoteiro'], 'unique', 'targetAttribute' => ['cla_idcla', 'cla_secao_idsecao', 'escoteiro_idescoteiro']],
            [['cla_idcla', 'cla_secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Cla::className(), 'targetAttribute' => ['cla_idcla' => 'idcla', 'cla_secao_idsecao' => 'secao_idsecao']],
            [['escoteiro_idescoteiro'], 'exist', 'skipOnError' => true, 'targetClass' => Escoteiro::className(), 'targetAttribute' => ['escoteiro_idescoteiro' => 'idescoteiro']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cla_idcla' => 'Cla Idcla',
            'cla_secao_idsecao' => 'Cla Secao Idsecao',
            'escoteiro_idescoteiro' => 'Escoteiro Idescoteiro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaIdcla()
    {
        return $this->hasOne(Cla::className(), ['idcla' => 'cla_idcla', 'secao_idsecao' => 'cla_secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiro()
    {
        return $this->hasOne(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro']);
    }
}
