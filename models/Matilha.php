<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "matilha".
 *
 * @property int $idmatilha
<<<<<<< HEAD
 * @property string $nome
 * @property string $cores
 * @property int $alcateia_idalcateia
 * @property int $alcateia_idsecao
 *
 * @property Alcateia $alcateiaIdalcateia
 * @property MatilhaHasEscoteiro[] $matilhaHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
=======
 * @property int $idalcateia
 * @property int $idsecao
 * @property string $nome
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class Matilha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'matilha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['nome', 'alcateia_idalcateia', 'alcateia_idsecao'], 'required'],
            [['alcateia_idalcateia', 'alcateia_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 80],
            [['cores'], 'string', 'max' => 45],
            [['alcateia_idalcateia', 'alcateia_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Alcateia::className(), 'targetAttribute' => ['alcateia_idalcateia' => 'idalcateia', 'alcateia_idsecao' => 'idsecao']],
=======
            [['idalcateia', 'idsecao', 'nome'], 'required'],
            [['idalcateia', 'idsecao'], 'integer'],
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
            'idmatilha' => 'Idmatilha',
            'nome' => 'Nome',
            'cores' => 'Cores',
            'alcateia_idalcateia' => 'Alcateia Idalcateia',
            'alcateia_idsecao' => 'Alcateia Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlcateiaIdalcateia()
    {
        return $this->hasOne(Alcateia::className(), ['idalcateia' => 'alcateia_idalcateia', 'idsecao' => 'alcateia_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatilhaHasEscoteiros()
    {
        return $this->hasMany(MatilhaHasEscoteiro::className(), ['matilha_idmatilha' => 'idmatilha']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('matilha_has_escoteiro', ['matilha_idmatilha' => 'idmatilha']);
    }
=======
            'idmatilha' => Yii::t('app', 'Idmatilha'),
            'idalcateia' => Yii::t('app', 'Idalcateia'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
