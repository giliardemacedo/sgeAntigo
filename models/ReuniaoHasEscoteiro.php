<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao_has_escoteiro".
 *
 * @property int $idreuniao
 * @property int $idescoteiro
 * @property int $idgrupo
 * @property int $idramo
 * @property int $idtropa
 * @property int $idpatrulha
 *
 * @property Reuniao $reuniao
 */
class ReuniaoHasEscoteiro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reuniao_has_escoteiro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idreuniao', 'idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha'], 'required'],
            [['idreuniao', 'idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha'], 'integer'],
            [['idreuniao', 'idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha'], 'unique', 'targetAttribute' => ['idreuniao', 'idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha']],
            [['idreuniao'], 'exist', 'skipOnError' => true, 'targetClass' => Reuniao::className(), 'targetAttribute' => ['idreuniao' => 'idreuniao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreuniao' => Yii::t('app', 'Idreuniao'),
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'idramo' => Yii::t('app', 'Idramo'),
            'idtropa' => Yii::t('app', 'Idtropa'),
            'idpatrulha' => Yii::t('app', 'Idpatrulha'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReuniao()
    {
        return $this->hasOne(Reuniao::className(), ['idreuniao' => 'idreuniao']);
    }
}
