<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reuniao;

/**
 * ReuniaoSearch represents the model behind the search form of `app\models\Reuniao`.
 */
class ReuniaoSearch extends Reuniao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idreuniao', 'idgrupo'], 'integer'],
            [['data', 'pauta'], 'safe'],
=======
            [['idreuniao'], 'integer'],
            [['data', 'pauta', 'reuniaocol'], 'safe'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
        $query = Reuniao::find();

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
            'idreuniao' => $this->idreuniao,
<<<<<<< HEAD
            'idgrupo' => $this->idgrupo,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'pauta', $this->pauta]);
=======
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'pauta', $this->pauta])
            ->andFilterWhere(['like', 'reuniaocol', $this->reuniaocol]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

        return $dataProvider;
    }
}
