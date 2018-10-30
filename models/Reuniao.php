<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao".
 *
 * @property int $idreuniao
<<<<<<< HEAD
 * @property string $data
 * @property string $pauta
 * @property int $grupo_idgrupo
 *
 * @property Grupo $grupoIdgrupo
=======
<<<<<<< HEAD
 * @property int $idgrupo
 * @property string $data
 * @property string $pauta
=======
 * @property string $data
 * @property string $pauta
 * @property string $reuniaocol
 *
 * @property ReuniaoHasEscoteiro[] $reuniaoHasEscoteiros
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['data', 'grupo_idgrupo'], 'required'],
            [['data'], 'safe'],
            [['grupo_idgrupo'], 'integer'],
            [['pauta'], 'string', 'max' => 120],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
=======
<<<<<<< HEAD
            [['idgrupo', 'data', 'pauta'], 'required'],
            [['idgrupo'], 'integer'],
            [['data'], 'safe'],
            [['pauta'], 'string', 'max' => 80],
=======
            [['data'], 'safe'],
            [['pauta'], 'string'],
            [['reuniaocol'], 'string', 'max' => 45],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'idreuniao' => 'Idreuniao',
            'data' => 'Data',
            'pauta' => 'Pauta',
            'grupo_idgrupo' => 'Grupo Idgrupo',
=======
            'idreuniao' => Yii::t('app', 'Idreuniao'),
<<<<<<< HEAD
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'data' => Yii::t('app', 'Data'),
            'pauta' => Yii::t('app', 'Pauta'),
        ];
    }
=======
            'data' => Yii::t('app', 'Data'),
            'pauta' => Yii::t('app', 'Pauta'),
            'reuniaocol' => Yii::t('app', 'Reuniaocol'),
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }
=======
    public function getReuniaoHasEscoteiros()
    {
        return $this->hasMany(ReuniaoHasEscoteiro::className(), ['idreuniao' => 'idreuniao']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
