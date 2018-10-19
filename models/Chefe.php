<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chefe".
 *
 * @property int $idchefe
<<<<<<< HEAD
 * @property int $idescoteiro
 * @property string $categoria
=======
 * @property string $idadm
 * @property int $idescoteiro
 * @property string $categoria
 * @property int $caixa_idcaixa
 *
 * @property Caixa $caixaIdcaixa
 * @property Escoteiro $escoteiro
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 */
class Chefe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chefe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idescoteiro', 'categoria'], 'required'],
            [['idescoteiro'], 'integer'],
            [['categoria'], 'string', 'max' => 45],
=======
            [['idadm', 'idescoteiro', 'categoria', 'caixa_idcaixa'], 'required'],
            [['idadm', 'idescoteiro', 'caixa_idcaixa'], 'integer'],
            [['categoria'], 'string', 'max' => 15],
            [['caixa_idcaixa'], 'exist', 'skipOnError' => true, 'targetClass' => Caixa::className(), 'targetAttribute' => ['caixa_idcaixa' => 'idcaixa']],
            [['idescoteiro'], 'exist', 'skipOnError' => true, 'targetClass' => Escoteiro::className(), 'targetAttribute' => ['idescoteiro' => 'idescoteiro']],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idchefe' => Yii::t('app', 'Idchefe'),
<<<<<<< HEAD
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'categoria' => Yii::t('app', 'Categoria'),
        ];
    }
=======
            'idadm' => Yii::t('app', 'Idadm'),
            'idescoteiro' => Yii::t('app', 'Idescoteiro'),
            'categoria' => Yii::t('app', 'Categoria'),
            'caixa_idcaixa' => Yii::t('app', 'Caixa Idcaixa'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaixaIdcaixa()
    {
        return $this->hasOne(Caixa::className(), ['idcaixa' => 'caixa_idcaixa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiro()
    {
        return $this->hasOne(Escoteiro::className(), ['idescoteiro' => 'idescoteiro']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
}
