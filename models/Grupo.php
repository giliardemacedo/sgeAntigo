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
 *
 * @property Caixa[] $caixas
 * @property Reuniao[] $reuniaos
 * @property Secao[] $secaos
=======
<<<<<<< HEAD
=======
 *
 * @property Escoteiro[] $escoteiros
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
            [['nome'], 'string', 'max' => 120],
            [['numeral'], 'string', 'max' => 15],
=======
<<<<<<< HEAD
            [['nome'], 'string', 'max' => 60],
            [['numeral'], 'string', 'max' => 45],
=======
            [['nome'], 'string', 'max' => 100],
            [['numeral'], 'string', 'max' => 15],
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
            'idgrupo' => 'Idgrupo',
            'nome' => 'Nome',
            'numeral' => 'Numeral',
        ];
    }
=======
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'nome' => Yii::t('app', 'Nome'),
            'numeral' => Yii::t('app', 'Numeral'),
        ];
    }
<<<<<<< HEAD
=======
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getCaixas()
    {
        return $this->hasMany(Caixa::className(), ['grupo_idgrupo' => 'idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReuniaos()
    {
        return $this->hasMany(Reuniao::className(), ['grupo_idgrupo' => 'idgrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecaos()
    {
        return $this->hasMany(Secao::className(), ['grupo_idgrupo' => 'idgrupo']);
    }
=======
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idgrupo' => 'idgrupo']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
