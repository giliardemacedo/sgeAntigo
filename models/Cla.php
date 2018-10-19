<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cla".
 *
 * @property int $idcla
 * @property int $idsecao
 * @property string $nome
 */
class Cla extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cla';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcla' => Yii::t('app', 'Idcla'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
}
