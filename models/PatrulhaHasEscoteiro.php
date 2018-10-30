<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha_has_escoteiro".
 *
 * @property int $patrulha_idpatrulha
 * @property int $escoteiro_idescoteiro
 *
 * @property Escoteiro $escoteiroIdescoteiro
 * @property Patrulha $patrulhaIdpatrulha
 */
class PatrulhaHasEscoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrulha_has_escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patrulha_idpatrulha', 'escoteiro_idescoteiro'], 'required'],
            [['patrulha_idpatrulha', 'escoteiro_idescoteiro'], 'integer'],
            [['patrulha_idpatrulha', 'escoteiro_idescoteiro'], 'unique', 'targetAttribute' => ['patrulha_idpatrulha', 'escoteiro_idescoteiro']],
            [['escoteiro_idescoteiro'], 'exist', 'skipOnError' => true, 'targetClass' => Escoteiro::className(), 'targetAttribute' => ['escoteiro_idescoteiro' => 'idescoteiro']],
            [['patrulha_idpatrulha'], 'exist', 'skipOnError' => true, 'targetClass' => Patrulha::className(), 'targetAttribute' => ['patrulha_idpatrulha' => 'idpatrulha']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patrulha_idpatrulha' => 'Patrulha Idpatrulha',
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
    public function getPatrulhaIdpatrulha()
    {
        return $this->hasOne(Patrulha::className(), ['idpatrulha' => 'patrulha_idpatrulha']);
    }
}
