<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Atividade;

/**
 * AtividadeSearch represents the model behind the search form of `app\models\Atividade`.
 */
class AtividadeSearch extends Atividade
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idatividade', 'area_atuacao_idarea_atuacao', 'secao_idsecao'], 'integer'],
            [['nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao'], 'safe'],
=======
<<<<<<< HEAD
            [['idatividade', 'idarea_atuacao', 'idsecao'], 'integer'],
            [['nome', 'descricao', 'material', 'tempoduracao', 'localaplicacao'], 'safe'],
=======
            [['idatividade', 'idramo'], 'integer'],
            [['nomeatividade', 'descricao', 'material', 'tempoduracao', 'localapropriadoaplicacao'], 'safe'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
        $query = Atividade::find();

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
            'idatividade' => $this->idatividade,
<<<<<<< HEAD
            'area_atuacao_idarea_atuacao' => $this->area_atuacao_idarea_atuacao,
            'secao_idsecao' => $this->secao_idsecao,
=======
<<<<<<< HEAD
            'idarea_atuacao' => $this->idarea_atuacao,
            'idsecao' => $this->idsecao,
            'tempoduracao' => $this->tempoduracao,
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'material', $this->material])
<<<<<<< HEAD
            ->andFilterWhere(['like', 'tempoduracao', $this->tempoduracao])
            ->andFilterWhere(['like', 'localaplicacao', $this->localaplicacao]);
=======
            ->andFilterWhere(['like', 'localaplicacao', $this->localaplicacao]);
=======
            'idramo' => $this->idramo,
            'tempoduracao' => $this->tempoduracao,
        ]);

        $query->andFilterWhere(['like', 'nomeatividade', $this->nomeatividade])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'material', $this->material])
            ->andFilterWhere(['like', 'localapropriadoaplicacao', $this->localapropriadoaplicacao]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $dataProvider;
    }
}
