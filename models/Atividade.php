<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade".
 *
 * @property int $idatividade
 * @property string $nome
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
 * @property string $localaplicacao
 * @property int $area_atuacao_idarea_atuacao
 * @property int $secao_idsecao
 *
 * @property AreaAtuacao $areaAtuacaoIdareaAtuacao
 * @property Secao $secaoIdsecao
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
            [['nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao', 'area_atuacao_idarea_atuacao', 'secao_idsecao'], 'required'],
            [['area_atuacao_idarea_atuacao', 'secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 150],
            [['material'], 'string', 'max' => 200],
            [['tempoduracao'], 'string', 'max' => 15],
            [['localaplicacao'], 'string', 'max' => 45],
            [['area_atuacao_idarea_atuacao'], 'exist', 'skipOnError' => true, 'targetClass' => AreaAtuacao::className(), 'targetAttribute' => ['area_atuacao_idarea_atuacao' => 'idarea_atuacao']],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idatividade' => 'Idatividade',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'material' => 'Material',
            'tempoduracao' => 'Tempoduracao',
            'localaplicacao' => 'Localaplicacao',
            'area_atuacao_idarea_atuacao' => 'Area Atuacao Idarea Atuacao',
            'secao_idsecao' => 'Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaAtuacaoIdareaAtuacao()
    {
        return $this->hasOne(AreaAtuacao::className(), ['idarea_atuacao' => 'area_atuacao_idarea_atuacao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecaoIdsecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'secao_idsecao']);
    }
}
