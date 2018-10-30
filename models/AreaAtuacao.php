<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "area_atuacao".
 *
<<<<<<< HEAD
 * @property int $idarea_atuacao
 * @property string $nome
 *
 * @property Atividade[] $atividades
=======
<<<<<<< HEAD
 * @property int $idarea_atuacao
 * @property string $nome Ao cadastras as atividades, o chefe  responsável poderá escolher uma das seguintes áreas de desenvolvimento: afetivo, caráter, espiritual, físico, intelectual, social.
=======
 * @property int $idareaatuacao
 * @property int $idatividade
 * @property string $nome
 * @property int $quantidade
 *
 * @property Atividade $atividade
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class AreaAtuacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area_atuacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 60],
=======
<<<<<<< HEAD
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 45],
=======
            [['idatividade', 'nome', 'quantidade'], 'required'],
            [['idatividade', 'quantidade'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['idatividade'], 'exist', 'skipOnError' => true, 'targetClass' => Atividade::className(), 'targetAttribute' => ['idatividade' => 'idatividade']],
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
            'idarea_atuacao' => 'Idarea Atuacao',
            'nome' => 'Nome',
=======
<<<<<<< HEAD
            'idarea_atuacao' => Yii::t('app', 'Idarea Atuacao'),
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
=======
            'idareaatuacao' => Yii::t('app', 'Idareaatuacao'),
            'idatividade' => Yii::t('app', 'Idatividade'),
            'nome' => Yii::t('app', 'Nome'),
            'quantidade' => Yii::t('app', 'Quantidade'),
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getAtividades()
    {
        return $this->hasMany(Atividade::className(), ['area_atuacao_idarea_atuacao' => 'idarea_atuacao']);
    }
=======
    public function getAtividade()
    {
        return $this->hasOne(Atividade::className(), ['idatividade' => 'idatividade']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
