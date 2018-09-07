<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao".
 *
 * @property int $idreuniao
 * @property string $data
 * @property string $pauta
 * @property string $reuniaocol
 *
 * @property ReuniaoHasEscoteiro[] $reuniaoHasEscoteiros
 */
class Reuniao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reuniao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['pauta'], 'string'],
            [['reuniaocol'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreuniao' => Yii::t('app', 'Idreuniao'),
            'data' => Yii::t('app', 'Data'),
            'pauta' => Yii::t('app', 'Pauta'),
            'reuniaocol' => Yii::t('app', 'Reuniaocol'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReuniaoHasEscoteiros()
    {
        return $this->hasMany(ReuniaoHasEscoteiro::className(), ['idreuniao' => 'idreuniao']);
    }
}
