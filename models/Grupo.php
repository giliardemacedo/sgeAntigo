<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property int $idgrupo
 * @property string $nome
 * @property string $numeral
<<<<<<< HEAD
=======
 *
 * @property Escoteiro[] $escoteiros
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'numeral'], 'required'],
<<<<<<< HEAD
            [['nome'], 'string', 'max' => 60],
            [['numeral'], 'string', 'max' => 45],
=======
            [['nome'], 'string', 'max' => 100],
            [['numeral'], 'string', 'max' => 15],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'nome' => Yii::t('app', 'Nome'),
            'numeral' => Yii::t('app', 'Numeral'),
        ];
    }
<<<<<<< HEAD
=======

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idgrupo' => 'idgrupo']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
