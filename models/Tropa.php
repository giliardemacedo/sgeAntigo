<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tropa".
 *
 * @property int $idtropa
 * @property string $nome
 * @property int $secao_idsecao
 *
 * @property Patrulha[] $patrulhas
 * @property Secao $secaoIdsecao
 */
class Tropa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tropa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'secao_idsecao'], 'required'],
            [['secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtropa' => 'Idtropa',
            'nome' => 'Nome',
            'secao_idsecao' => 'Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulhas()
    {
        return $this->hasMany(Patrulha::className(), ['tropa_idtropa' => 'idtropa', 'tropa_secao_idsecao' => 'secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSecaoIdsecao()
    {
        return $this->hasOne(Secao::className(), ['idsecao' => 'secao_idsecao']);
    }
}
