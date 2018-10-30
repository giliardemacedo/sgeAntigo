<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cla".
 *
 * @property int $idcla
<<<<<<< HEAD
 * @property string $nome
 * @property int $secao_idsecao
 *
 * @property Secao $secaoIdsecao
 * @property ClaHasEscoteiro[] $claHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
=======
 * @property int $idsecao
 * @property string $nome
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['nome', 'secao_idsecao'], 'required'],
            [['secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
=======
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 60],
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
            'idcla' => 'Idcla',
            'nome' => 'Nome',
            'secao_idsecao' => 'Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecaoIdsecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClaHasEscoteiros()
    {
        return $this->hasMany(ClaHasEscoteiro::className(), ['cla_idcla' => 'idcla', 'cla_secao_idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('cla_has_escoteiro', ['cla_idcla' => 'idcla', 'cla_secao_idsecao' => 'secao_idsecao']);
    }
=======
            'idcla' => Yii::t('app', 'Idcla'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
