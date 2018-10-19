<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "endereco".
 *
 * @property int $idendereco
<<<<<<< HEAD
=======
 * @property int $idescoteiro
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $logradouro
 * @property string $bairro
 * @property string $numerocasa
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
            [['idescoteiro', 'logradouro', 'bairro', 'numerocasa'], 'required'],
            [['idescoteiro'], 'integer'],
            [['logradouro'], 'string', 'max' => 45],
            [['bairro'], 'string', 'max' => 30],
            [['numerocasa'], 'string', 'max' => 10],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
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
}
