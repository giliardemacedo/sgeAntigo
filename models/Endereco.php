<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $idendereco
<<<<<<< HEAD
 * @property string $logradouro
 * @property string $bairro
 * @property string $numerocasa
 *
 * @property Escoteiro[] $escoteiros
=======
<<<<<<< HEAD
=======
 * @property int $idescoteiro
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $logradouro
 * @property string $bairro
 * @property string $numerocasa
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'endereco';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['logradouro', 'bairro', 'numerocasa'], 'required'],
            [['logradouro', 'bairro', 'numerocasa'], 'string', 'max' => 45],
=======
<<<<<<< HEAD
            [['logradouro', 'bairro', 'numerocasa'], 'required'],
            [['logradouro', 'bairro', 'numerocasa'], 'string', 'max' => 45],
=======
            [['idescoteiro', 'logradouro', 'bairro', 'numerocasa'], 'required'],
            [['idescoteiro'], 'integer'],
            [['logradouro'], 'string', 'max' => 45],
            [['bairro'], 'string', 'max' => 30],
            [['numerocasa'], 'string', 'max' => 10],
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
            'idendereco' => 'Idendereco',
            'logradouro' => 'Logradouro',
            'bairro' => 'Bairro',
            'numerocasa' => 'Numerocasa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['endereco_idendereco' => 'idendereco']);
    }
=======
            'idendereco' => Yii::t('app', 'Idendereco'),
<<<<<<< HEAD
=======
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'logradouro' => Yii::t('app', 'Logradouro'),
            'bairro' => Yii::t('app', 'Bairro'),
            'numerocasa' => Yii::t('app', 'Numerocasa'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
