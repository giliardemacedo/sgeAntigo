<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alcateia".
 *
 * @property int $idalcateia
 * @property string $nome
 * @property int $idsecao
 *
 * @property Secao $secao
 * @property Matilha[] $matilhas
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
            [['nome', 'idsecao'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['idsecao' => 'idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idalcateia' => 'Idalcateia',
            'nome' => 'Nome',
            'idsecao' => 'Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatilhas()
    {
        return $this->hasMany(Matilha::className(), ['alcateia_idalcateia' => 'idalcateia', 'alcateia_idsecao' => 'idsecao']);
    }
}
