<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idcontato
 * @property string $numerotelefone
 * @property string $email
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
            [['numerotelefone', 'email'], 'required'],
            [['numerotelefone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcontato' => Yii::t('app', 'Idcontato'),
            'numerotelefone' => Yii::t('app', 'Numerotelefone'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
