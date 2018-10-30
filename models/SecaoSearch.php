<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Secao;

/**
 * SecaoSearch represents the model behind the search form of `app\models\Secao`.
 */
class SecaoSearch extends Secao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idsecao', 'grupo_idgrupo'], 'integer'],
=======
            [['idsecao', 'idgrupo'], 'integer'],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            [['nome', 'tipo'], 'safe'],
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
        $query = Secao::find();

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
            'idsecao' => $this->idsecao,
<<<<<<< HEAD
            'grupo_idgrupo' => $this->grupo_idgrupo,
=======
            'idgrupo' => $this->idgrupo,
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'tipo', $this->tipo]);

        return $dataProvider;
    }
}
