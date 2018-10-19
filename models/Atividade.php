<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade".
 *
 * @property int $idatividade
 * @property int $idarea_atuacao
 * @property int $idsecao
 * @property string $nome
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
 * @property string $localaplicacao Local apropriado para a aplicação da atividade.
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
            [['idarea_atuacao', 'idsecao', 'nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao'], 'required'],
            [['idarea_atuacao', 'idsecao'], 'integer'],
            [['tempoduracao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 60],
            [['material'], 'string', 'max' => 120],
            [['localaplicacao'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idatividade' => Yii::t('app', 'Idatividade'),
            'idarea_atuacao' => Yii::t('app', 'Idarea Atuacao'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
            'descricao' => Yii::t('app', 'Descricao'),
            'material' => Yii::t('app', 'Material'),
            'tempoduracao' => Yii::t('app', 'Tempoduracao'),
            'localaplicacao' => Yii::t('app', 'Localaplicacao'),
        ];
    }
}
