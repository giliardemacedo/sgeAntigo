<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade".
 *
 * @property int $idatividade
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @property int $idarea_atuacao
 * @property int $idsecao
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 * @property string $nome
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
<<<<<<< HEAD
 * @property string $localaplicacao
 * @property int $area_atuacao_idarea_atuacao
 * @property int $secao_idsecao
 *
 * @property AreaAtuacao $areaAtuacaoIdareaAtuacao
 * @property Secao $secaoIdsecao
=======
 * @property string $localaplicacao Local apropriado para a aplicação da atividade.
=======
 * @property int $idramo
 * @property string $nomeatividade
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
 * @property string $localapropriadoaplicacao
 *
 * @property Areaatuacao[] $areaatuacaos
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao', 'area_atuacao_idarea_atuacao', 'secao_idsecao'], 'required'],
            [['area_atuacao_idarea_atuacao', 'secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 150],
            [['material'], 'string', 'max' => 200],
            [['tempoduracao'], 'string', 'max' => 15],
            [['localaplicacao'], 'string', 'max' => 45],
            [['area_atuacao_idarea_atuacao'], 'exist', 'skipOnError' => true, 'targetClass' => AreaAtuacao::className(), 'targetAttribute' => ['area_atuacao_idarea_atuacao' => 'idarea_atuacao']],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
=======
<<<<<<< HEAD
            [['idarea_atuacao', 'idsecao', 'nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao'], 'required'],
            [['idarea_atuacao', 'idsecao'], 'integer'],
            [['tempoduracao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 60],
            [['material'], 'string', 'max' => 120],
            [['localaplicacao'], 'string', 'max' => 80],
=======
            [['idramo', 'nomeatividade', 'descricao', 'material', 'tempoduracao', 'localapropriadoaplicacao'], 'required'],
            [['idramo'], 'integer'],
            [['tempoduracao'], 'safe'],
            [['nomeatividade'], 'string', 'max' => 20],
            [['descricao'], 'string', 'max' => 50],
            [['material'], 'string', 'max' => 150],
            [['localapropriadoaplicacao'], 'string', 'max' => 45],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
=======
            'idatividade' => Yii::t('app', 'Idatividade'),
<<<<<<< HEAD
            'idarea_atuacao' => Yii::t('app', 'Idarea Atuacao'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
            'descricao' => Yii::t('app', 'Descricao'),
            'material' => Yii::t('app', 'Material'),
            'tempoduracao' => Yii::t('app', 'Tempoduracao'),
            'localaplicacao' => Yii::t('app', 'Localaplicacao'),
        ];
    }
=======
            'idramo' => Yii::t('app', 'Idramo'),
            'nomeatividade' => Yii::t('app', 'Nomeatividade'),
            'descricao' => Yii::t('app', 'Descricao'),
            'material' => Yii::t('app', 'Material'),
            'tempoduracao' => Yii::t('app', 'Tempoduracao'),
            'localapropriadoaplicacao' => Yii::t('app', 'Localapropriadoaplicacao'),
        ];
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getSecaoIdsecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'secao_idsecao']);
    }
=======
    public function getAreaatuacaos()
    {
        return $this->hasMany(Areaatuacao::className(), ['idatividade' => 'idatividade']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
