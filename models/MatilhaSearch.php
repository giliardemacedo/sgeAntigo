<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Matilha;

/**
 * MatilhaSearch represents the model behind the search form of `app\models\Matilha`.
 */
class MatilhaSearch extends Matilha
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idmatilha', 'alcateia_idalcateia', 'alcateia_idsecao'], 'integer'],
            [['nome', 'cores'], 'safe'],
=======
            [['idmatilha', 'idalcateia', 'idsecao'], 'integer'],
            [['nome'], 'safe'],
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
        $query = Matilha::find();

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
            'idmatilha' => $this->idmatilha,
<<<<<<< HEAD
            'alcateia_idalcateia' => $this->alcateia_idalcateia,
            'alcateia_idsecao' => $this->alcateia_idsecao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cores', $this->cores]);
=======
            'idalcateia' => $this->idalcateia,
            'idsecao' => $this->idsecao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $dataProvider;
    }
}
