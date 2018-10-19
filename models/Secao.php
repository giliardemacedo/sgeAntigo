<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "secao".
 *
 * @property int $idsecao
 * @property int $idgrupo
 * @property string $nome
 * @property string $tipo
 *
 * @property Escoteiro[] $escoteiros
 */
class Secao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'secao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idgrupo', 'nome', 'tipo'], 'required'],
            [['idgrupo'], 'integer'],
            [['nome', 'tipo'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idsecao' => Yii::t('app', 'Idsecao'),
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'nome' => Yii::t('app', 'Nome'),
            'tipo' => Yii::t('app', 'Tipo'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idsecao' => 'idsecao']);
    }
}
