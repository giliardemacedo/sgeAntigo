<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao".
 *
 * @property int $idreuniao
 * @property int $idgrupo
 * @property string $data
 * @property string $pauta
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
            [['idgrupo', 'data', 'pauta'], 'required'],
            [['idgrupo'], 'integer'],
            [['data'], 'safe'],
            [['pauta'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreuniao' => Yii::t('app', 'Idreuniao'),
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'data' => Yii::t('app', 'Data'),
            'pauta' => Yii::t('app', 'Pauta'),
        ];
    }
}
