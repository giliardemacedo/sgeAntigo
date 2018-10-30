<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alcateia".
 *
 * @property int $idalcateia
<<<<<<< HEAD
 * @property string $nome
 * @property int $idsecao
 *
 * @property Secao $secao
 * @property Matilha[] $matilhas
=======
 * @property int $idsecao
 * @property string $nome
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['nome', 'idsecao'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['idsecao' => 'idsecao']],
=======
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
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
=======
            'idalcateia' => Yii::t('app', 'Idalcateia'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
