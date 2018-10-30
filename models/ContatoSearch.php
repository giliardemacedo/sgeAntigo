<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contato;

/**
 * ContatoSearch represents the model behind the search form of `app\models\Contato`.
 */
class ContatoSearch extends Contato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idcontato'], 'integer'],
            [['numero_telefone', 'email'], 'safe'],
=======
<<<<<<< HEAD
            [['idcontato'], 'integer'],
=======
            [['idcontato', 'idescoteiro'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['numerotelefone', 'email'], 'safe'],
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
        $query = Contato::find();

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
            'idcontato' => $this->idcontato,
<<<<<<< HEAD
        ]);

        $query->andFilterWhere(['like', 'numero_telefone', $this->numero_telefone])
=======
<<<<<<< HEAD
=======
            'idescoteiro' => $this->idescoteiro,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);

        $query->andFilterWhere(['like', 'numerotelefone', $this->numerotelefone])
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
