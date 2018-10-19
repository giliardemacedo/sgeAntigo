<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alcateia".
 *
 * @property int $idalcateia
 * @property int $idsecao
 * @property string $nome
 */
class Alcateia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alcateia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idalcateia' => Yii::t('app', 'Idalcateia'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
}
