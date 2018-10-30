<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idcontato
 * @property string $numero_telefone
 * @property string $email
 *
 * @property Escoteiro[] $escoteiros
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numero_telefone', 'email'], 'required'],
            [['numero_telefone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcontato' => 'Idcontato',
            'numero_telefone' => 'Numero Telefone',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['contato_idcontato' => 'idcontato']);
    }
}
