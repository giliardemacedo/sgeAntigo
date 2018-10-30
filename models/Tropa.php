<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tropa".
 *
 * @property int $idtropa
<<<<<<< HEAD
 * @property string $nome
 * @property int $secao_idsecao
 *
 * @property Patrulha[] $patrulhas
 * @property Secao $secaoIdsecao
=======
<<<<<<< HEAD
 * @property int $idsecao
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
 * @property string $nome
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            [['nome', 'secao_idsecao'], 'required'],
            [['secao_idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 45],
            [['secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Secao::className(), 'targetAttribute' => ['secao_idsecao' => 'idsecao']],
=======
<<<<<<< HEAD
            [['idsecao', 'nome'], 'required'],
            [['idsecao'], 'integer'],
            [['nome'], 'string', 'max' => 70],
=======
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 20],
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
=======
            'idtropa' => Yii::t('app', 'Idtropa'),
<<<<<<< HEAD
            'idsecao' => Yii::t('app', 'Idsecao'),
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nome' => Yii::t('app', 'Nome'),
        ];
    }
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
