<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idcontato
<<<<<<< HEAD
=======
 * @property int $idescoteiro
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $numerotelefone
 * @property string $email
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
            [['numerotelefone', 'email'], 'required'],
            [['numerotelefone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 60],
=======
            [['idescoteiro', 'numerotelefone', 'email'], 'required'],
            [['idescoteiro'], 'integer'],
            [['numerotelefone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 25],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcontato' => Yii::t('app', 'Idcontato'),
<<<<<<< HEAD
=======
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'numerotelefone' => Yii::t('app', 'Numerotelefone'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
