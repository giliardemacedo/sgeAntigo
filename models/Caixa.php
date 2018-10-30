<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "caixa".
 *
 * @property int $idcaixa
 * @property double $valor
 * @property string $data
 * @property string $responsavel
 * @property string $descricao
 * @property string $comprovante
 * @property int $grupo_idgrupo
 *
 * @property Grupo $grupoIdgrupo
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
            [['valor', 'data', 'responsavel', 'descricao', 'grupo_idgrupo'], 'required'],
            [['valor'], 'number'],
            [['data'], 'safe'],
            [['grupo_idgrupo'], 'integer'],
            [['responsavel'], 'string', 'max' => 60],
            [['descricao'], 'string', 'max' => 120],
            [['comprovante'], 'string', 'max' => 45],
            [['grupo_idgrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['grupo_idgrupo' => 'idgrupo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcaixa' => 'Idcaixa',
            'valor' => 'Valor',
            'data' => 'Data',
            'responsavel' => 'Responsavel',
            'descricao' => 'Descricao',
            'comprovante' => 'Comprovante',
            'grupo_idgrupo' => 'Grupo Idgrupo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupoIdgrupo()
    {
        return $this->hasOne(Grupo::className(), ['idgrupo' => 'grupo_idgrupo']);
    }
}
