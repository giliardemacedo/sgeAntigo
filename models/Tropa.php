<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tropa".
 *
 * @property int $idtropa
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
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtropa' => Yii::t('app', 'Idtropa'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
}
