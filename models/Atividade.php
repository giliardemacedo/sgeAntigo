<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade".
 *
 * @property int $idatividade
 * @property int $idramo
 * @property string $nomeatividade
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
 * @property string $localapropriadoaplicacao
 *
 * @property Areaatuacao[] $areaatuacaos
 */
class Atividade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atividade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idramo', 'nomeatividade', 'descricao', 'material', 'tempoduracao', 'localapropriadoaplicacao'], 'required'],
            [['idramo'], 'integer'],
            [['tempoduracao'], 'safe'],
            [['nomeatividade'], 'string', 'max' => 20],
            [['descricao'], 'string', 'max' => 50],
            [['material'], 'string', 'max' => 150],
            [['localapropriadoaplicacao'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idatividade' => Yii::t('app', 'Idatividade'),
            'idramo' => Yii::t('app', 'Idramo'),
            'nomeatividade' => Yii::t('app', 'Nomeatividade'),
            'descricao' => Yii::t('app', 'Descricao'),
            'material' => Yii::t('app', 'Material'),
            'tempoduracao' => Yii::t('app', 'Tempoduracao'),
            'localapropriadoaplicacao' => Yii::t('app', 'Localapropriadoaplicacao'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaatuacaos()
    {
        return $this->hasMany(Areaatuacao::className(), ['idatividade' => 'idatividade']);
    }
}
