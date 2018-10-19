<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reuniao".
 *
 * @property int $idreuniao
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
            [['idgrupo', 'data', 'pauta'], 'required'],
            [['idgrupo'], 'integer'],
            [['data'], 'safe'],
            [['pauta'], 'string', 'max' => 80],
=======
            [['data'], 'safe'],
            [['pauta'], 'string'],
            [['reuniaocol'], 'string', 'max' => 45],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReuniaoHasEscoteiros()
    {
        return $this->hasMany(ReuniaoHasEscoteiro::className(), ['idreuniao' => 'idreuniao']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
