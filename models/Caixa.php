<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property int $idcaixa
<<<<<<< HEAD
=======
<<<<<<< HEAD
 * @property int $idgrupo
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 * @property double $valor
 * @property string $data
 * @property string $responsavel
 * @property string $descricao
 * @property string $comprovante
<<<<<<< HEAD
 * @property int $grupo_idgrupo
 *
 * @property Grupo $grupoIdgrupo
=======
=======
 * @property double $valor
 * @property string $responsavel
 * @property string $descricao Esse campo serve para informa o motivo pelo qual houve a entrada ou saída de dinheiro.
 * @property string $data
 *
 * @property Chefe[] $cheves
 * @property Entrada[] $entradas
 * @property Saída $saída
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class Caixa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'caixa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['valor', 'data', 'responsavel', 'descricao', 'grupo_idgrupo'], 'required'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['grupo_idgrupo'], 'integer'],
            [['responsavel'], 'string', 'max' => 60],
            [['descricao'], 'string', 'max' => 120],
            [['comprovante'], 'string', 'max' => 45],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
=======
<<<<<<< HEAD
            [['idgrupo', 'valor', 'data', 'responsavel', 'descricao'], 'required'],
            [['idgrupo'], 'integer'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['responsavel'], 'string', 'max' => 60],
            [['descricao'], 'string', 'max' => 80],
            [['comprovante'], 'string', 'max' => 50],
=======
            [['valor', 'responsavel', 'descricao', 'data'], 'required'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['responsavel'], 'string', 'max' => 25],
            [['descricao'], 'string', 'max' => 45],
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
            'idcaixa' => 'Idcaixa',
            'valor' => 'Valor',
            'data' => 'Data',
            'responsavel' => 'Responsavel',
            'descricao' => 'Descricao',
            'comprovante' => 'Comprovante',
            'grupo_idgrupo' => 'Grupo Idgrupo',
        ];
    }
=======
            'idcaixa' => Yii::t('app', 'Idcaixa'),
<<<<<<< HEAD
            'idgrupo' => Yii::t('app', 'Idgrupo'),
            'valor' => Yii::t('app', 'Valor'),
            'data' => Yii::t('app', 'Data'),
            'responsavel' => Yii::t('app', 'Responsavel'),
            'descricao' => Yii::t('app', 'Descricao'),
            'comprovante' => Yii::t('app', 'Comprovante'),
        ];
    }
=======
            'valor' => Yii::t('app', 'Valor'),
            'responsavel' => Yii::t('app', 'Responsavel'),
            'descricao' => Yii::t('app', 'Descricao'),
            'data' => Yii::t('app', 'Data'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCheves()
    {
        return $this->hasMany(Chefe::className(), ['caixa_idcaixa' => 'idcaixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntradas()
    {
        return $this->hasMany(Entrada::className(), ['caixa_idcaixa' => 'idcaixa']);
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }
=======
    public function getSaída()
    {
        return $this->hasOne(Saída::className(), ['caixa_idcaixa' => 'idcaixa']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
