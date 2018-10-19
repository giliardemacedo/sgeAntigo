<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matilha".
 *
 * @property int $idmatilha
 * @property int $idalcateia
 * @property int $idsecao
 * @property string $nome
 */
class Matilha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matilha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idalcateia', 'idsecao', 'nome'], 'required'],
            [['idalcateia', 'idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmatilha' => Yii::t('app', 'Idmatilha'),
            'idalcateia' => Yii::t('app', 'Idalcateia'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
}
