<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property int $idcaixa
<<<<<<< HEAD
 * @property int $idgrupo
 * @property double $valor
 * @property string $data
 * @property string $responsavel
 * @property string $descricao
 * @property string $comprovante
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSaída()
    {
        return $this->hasOne(Saída::className(), ['caixa_idcaixa' => 'idcaixa']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
