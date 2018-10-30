<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chefe;

/**
 * ChefeSearch represents the model behind the search form of `app\models\Chefe`.
 */
class ChefeSearch extends Chefe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idchefe', 'idescoteiro'], 'integer'],
=======
            [['idchefe', 'idadm', 'idescoteiro', 'caixa_idcaixa'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['categoria'], 'safe'],
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
        $query = Chefe::find();

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
            'idchefe' => $this->idchefe,
<<<<<<< HEAD
            'idescoteiro' => $this->idescoteiro,
=======
            'idadm' => $this->idadm,
            'idescoteiro' => $this->idescoteiro,
            'caixa_idcaixa' => $this->caixa_idcaixa,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);

        $query->andFilterWhere(['like', 'categoria', $this->categoria]);

        return $dataProvider;
    }
}
