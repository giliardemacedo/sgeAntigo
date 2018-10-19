<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha".
 *
 * @property int $idpatrulha
 * @property int $idtropa
<<<<<<< HEAD
 * @property int $idsecao
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
=======
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
 *
 * @property Escoteiro[] $escoteiros
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 */
class Patrulha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrulha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idtropa', 'idsecao', 'nome'], 'required'],
            [['idtropa', 'idsecao'], 'integer'],
            [['nome', 'cores'], 'string', 'max' => 60],
            [['gritodeguerra'], 'string', 'max' => 300],
=======
            [['idtropa', 'nome'], 'required'],
            [['idtropa'], 'integer'],
            [['nome'], 'string', 'max' => 20],
            [['cores'], 'string', 'max' => 45],
            [['gritodeguerra'], 'string', 'max' => 200],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpatrulha' => Yii::t('app', 'Idpatrulha'),
<<<<<<< HEAD
            'idtropa' => Yii::t('app', 'Idtropa'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Gritodeguerra'),
        ];
    }
=======
            'idtropa' => Yii::t('app', 'Nome da Tropa'),
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Grito de Guerra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
