<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patrulha".
 *
 * @property int $idpatrulha
<<<<<<< HEAD
 * @property string $nome
 * @property string $grito_guerra
 * @property int $tropa_idtropa
 * @property int $tropa_secao_idsecao
 *
 * @property Tropa $tropaIdtropa
 * @property PatrulhaHasEscoteiro[] $patrulhaHasEscoteiros
 * @property Escoteiro[] $escoteiroIdescoteiros
=======
 * @property int $idtropa
<<<<<<< HEAD
 * @property int $idsecao
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
=======
 * @property string $nome
 * @property string $cores
 * @property string $gritodeguerra
 *
 * @property Escoteiro[] $escoteiros
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
 */
class Patrulha extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patrulha';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['nome', 'tropa_idtropa', 'tropa_secao_idsecao'], 'required'],
            [['tropa_idtropa', 'tropa_secao_idsecao'], 'integer'],
            [['nome', 'grito_guerra'], 'string', 'max' => 45],
            [['tropa_idtropa', 'tropa_secao_idsecao'], 'exist', 'skipOnError' => true, 'targetClass' => Tropa::className(), 'targetAttribute' => ['tropa_idtropa' => 'idtropa', 'tropa_secao_idsecao' => 'secao_idsecao']],
=======
<<<<<<< HEAD
            [['idtropa', 'idsecao', 'nome'], 'required'],
            [['idtropa', 'idsecao'], 'integer'],
            [['nome', 'cores'], 'string', 'max' => 60],
            [['gritodeguerra'], 'string', 'max' => 300],
=======
            [['idtropa', 'nome'], 'required'],
            [['idtropa'], 'integer'],
            [['nome'], 'string', 'max' => 20],
            [['cores'], 'string', 'max' => 45],
            [['gritodeguerra'], 'string', 'max' => 200],
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
            'idpatrulha' => 'Idpatrulha',
            'nome' => 'Nome',
            'grito_guerra' => 'Grito Guerra',
            'tropa_idtropa' => 'Tropa Idtropa',
            'tropa_secao_idsecao' => 'Tropa Secao Idsecao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTropaIdtropa()
    {
        return $this->hasOne(Tropa::className(), ['idtropa' => 'tropa_idtropa', 'secao_idsecao' => 'tropa_secao_idsecao']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatrulhaHasEscoteiros()
    {
        return $this->hasMany(PatrulhaHasEscoteiro::className(), ['patrulha_idpatrulha' => 'idpatrulha']);
=======
            'idpatrulha' => Yii::t('app', 'Idpatrulha'),
<<<<<<< HEAD
            'idtropa' => Yii::t('app', 'Idtropa'),
            'idsecao' => Yii::t('app', 'Idsecao'),
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Gritodeguerra'),
        ];
    }
=======
            'idtropa' => Yii::t('app', 'Nome da Tropa'),
            'nome' => Yii::t('app', 'Nome'),
            'cores' => Yii::t('app', 'Cores'),
            'gritodeguerra' => Yii::t('app', 'Grito de Guerra'),
        ];
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * @return \yii\db\ActiveQuery
     */
<<<<<<< HEAD
    public function getEscoteiroIdescoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idescoteiro' => 'escoteiro_idescoteiro'])->viaTable('patrulha_has_escoteiro', ['patrulha_idpatrulha' => 'idpatrulha']);
    }
=======
    public function getEscoteiros()
    {
        return $this->hasMany(Escoteiro::className(), ['idpatrulha' => 'idpatrulha', 'idtropa' => 'idtropa']);
    }
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
}
