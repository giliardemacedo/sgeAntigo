<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cla;

/**
 * ClaSearch represents the model behind the search form of `app\models\Cla`.
 */
class ClaSearch extends Cla
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idcla', 'secao_idsecao'], 'integer'],
=======
            [['idcla', 'idsecao'], 'integer'],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            [['nome'], 'safe'],
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
        $query = Cla::find();

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
            'idcla' => $this->idcla,
<<<<<<< HEAD
            'secao_idsecao' => $this->secao_idsecao,
=======
            'idsecao' => $this->idsecao,
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
