<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tropa".
 *
 * @property int $idtropa
<<<<<<< HEAD
 * @property int $idsecao
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $nome
 */
class Tropa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tropa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 70],
=======
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 20],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtropa' => Yii::t('app', 'Idtropa'),
<<<<<<< HEAD
            'idsecao' => Yii::t('app', 'Idsecao'),
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
}
