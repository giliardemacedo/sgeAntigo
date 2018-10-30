<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Escoteiro;

/**
 * EscoteiroSearch represents the model behind the search form of `app\models\Escoteiro`.
 */
class EscoteiroSearch extends Escoteiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idescoteiro', 'endereco_idendereco', 'contato_idcontato'], 'integer'],
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registro_ueb', 'estado', 'encargo_patrulha', 'chefe', 'categoria_chefe'], 'safe'],
=======
<<<<<<< HEAD
            [['idescoteiro', 'idsecao', 'idcontato', 'idendereco', 'estado'], 'integer'],
=======
            [['idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha', 'estado'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registroueb'], 'safe'],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Escoteiro::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idescoteiro' => $this->idescoteiro,
<<<<<<< HEAD
            'nascimento' => $this->nascimento,
            'endereco_idendereco' => $this->endereco_idendereco,
            'contato_idcontato' => $this->contato_idcontato,
=======
<<<<<<< HEAD
            'idsecao' => $this->idsecao,
            'idcontato' => $this->idcontato,
            'idendereco' => $this->idendereco,
=======
            'idgrupo' => $this->idgrupo,
            'idramo' => $this->idramo,
            'idtropa' => $this->idtropa,
            'idpatrulha' => $this->idpatrulha,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nascimento' => $this->nascimento,
            'estado' => $this->estado,
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
<<<<<<< HEAD
            ->andFilterWhere(['like', 'registro_ueb', $this->registro_ueb])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'encargo_patrulha', $this->encargo_patrulha])
            ->andFilterWhere(['like', 'chefe', $this->chefe])
            ->andFilterWhere(['like', 'categoria_chefe', $this->categoria_chefe]);
=======
            ->andFilterWhere(['like', 'registroueb', $this->registroueb]);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $dataProvider;
    }
}
