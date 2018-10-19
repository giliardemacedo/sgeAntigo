<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha".
 *
 * @property int $idpatrulha
 * @property int $idtropa
 * @property int $idsecao
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
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
            [['idtropa', 'idsecao', 'nome'], 'required'],
            [['idtropa', 'idsecao'], 'integer'],
            [['nome', 'cores'], 'string', 'max' => 60],
            [['gritodeguerra'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idpatrulha' => Yii::t('app', 'Idpatrulha'),
            'idtropa' => Yii::t('app', 'Idtropa'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Gritodeguerra'),
        ];
    }
}
