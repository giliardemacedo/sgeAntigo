<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atividade".
 *
 * @property int $idatividade
<<<<<<< HEAD
 * @property int $idarea_atuacao
 * @property int $idsecao
 * @property string $nome
 * @property string $descricao
 * @property string $material
 * @property string $tempoduracao
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
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
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAreaatuacaos()
    {
        return $this->hasMany(Areaatuacao::className(), ['idatividade' => 'idatividade']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
