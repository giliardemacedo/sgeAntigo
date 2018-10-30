<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao".
 *
 * @property int $idreuniao
 * @property string $data
 * @property string $pauta
 * @property int $grupo_idgrupo
 *
 * @property Grupo $grupoIdgrupo
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
            [['data', 'grupo_idgrupo'], 'required'],
            [['data'], 'safe'],
            [['grupo_idgrupo'], 'integer'],
            [['pauta'], 'string', 'max' => 120],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreuniao' => 'Idreuniao',
            'data' => 'Data',
            'pauta' => 'Pauta',
            'grupo_idgrupo' => 'Grupo Idgrupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }
}
