<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idcontato
<<<<<<< HEAD
 * @property string $numero_telefone
 * @property string $email
 *
 * @property Escoteiro[] $escoteiros
=======
<<<<<<< HEAD
=======
 * @property int $idescoteiro
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $numerotelefone
 * @property string $email
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['numero_telefone', 'email'], 'required'],
            [['numero_telefone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 45],
=======
<<<<<<< HEAD
            [['numerotelefone', 'email'], 'required'],
            [['numerotelefone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 60],
=======
            [['idescoteiro', 'numerotelefone', 'email'], 'required'],
            [['idescoteiro'], 'integer'],
            [['numerotelefone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
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
            'idcontato' => 'Idcontato',
            'numero_telefone' => 'Numero Telefone',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['contato_idcontato' => 'idcontato']);
    }
=======
            'idcontato' => Yii::t('app', 'Idcontato'),
<<<<<<< HEAD
=======
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'numerotelefone' => Yii::t('app', 'Numerotelefone'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
