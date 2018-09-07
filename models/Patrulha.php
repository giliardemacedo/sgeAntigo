<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha".
 *
 * @property int $idpatrulha
 * @property int $idtropa
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
 *
 * @property Escoteiro[] $escoteiros
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
            [['idtropa', 'nome'], 'required'],
            [['idtropa'], 'integer'],
            [['nome'], 'string', 'max' => 20],
            [['cores'], 'string', 'max' => 45],
            [['gritodeguerra'], 'string', 'max' => 200],
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
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Gritodeguerra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']);
    }
}
