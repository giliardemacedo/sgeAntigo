<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matilha_has_escoteiro".
 *
 * @property int $matilha_idmatilha
 * @property int $escoteiro_idescoteiro
 *
 * @property Escoteiro $escoteiroIdescoteiro
 * @property Matilha $matilhaIdmatilha
 */
class MatilhaHasEscoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matilha_has_escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matilha_idmatilha', 'escoteiro_idescoteiro'], 'required'],
            [['matilha_idmatilha', 'escoteiro_idescoteiro'], 'integer'],
            [['matilha_idmatilha', 'escoteiro_idescoteiro'], 'unique', 'targetAttribute' => ['matilha_idmatilha', 'escoteiro_idescoteiro']],
            [['escoteiro_idescoteiro'], 'exist', 'skipOnError' => true, 'targetClass' => Escoteiro::className(), 'targetAttribute' => ['escoteiro_idescoteiro' => 'idescoteiro']],
            [['matilha_idmatilha'], 'exist', 'skipOnError' => true, 'targetClass' => Matilha::className(), 'targetAttribute' => ['matilha_idmatilha' => 'idmatilha']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'matilha_idmatilha' => 'Matilha Idmatilha',
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
    public function getMatilhaIdmatilha()
    {
        return $this->hasOne(Matilha::className(), ['idmatilha' => 'matilha_idmatilha']);
    }
}
