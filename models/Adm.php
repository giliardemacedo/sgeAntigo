<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adm".
 *
 * @property string $idadm
 * @property string $login
 * @property string $senha
 */
class Adm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idadm', 'login', 'senha'], 'required'],
            [['idadm'], 'integer'],
            [['login', 'senha'], 'string', 'max' => 45],
            [['idadm'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idadm' => Yii::t('app', 'Idadm'),
            'login' => Yii::t('app', 'Login'),
            'senha' => Yii::t('app', 'Senha'),
        ];
    }
}
