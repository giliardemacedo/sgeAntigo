<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "flordelis".
 *
 * @property int $idflordelis
 * @property int $idsecao
 */
class Flordelis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flordelis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idsecao'], 'required'],
            [['idsecao'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idflordelis' => Yii::t('app', 'Idflordelis'),
            'idsecao' => Yii::t('app', 'Idsecao'),
        ];
    }
}
