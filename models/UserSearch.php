<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'school', 'batch', 'psu_employer', 'country', 'city', 'current_employer', 'sector'], 'integer'],
            [['firstName', 'lastName', 'title', 'email', 'password', 'mobile', 'authKey', 'accessToken', 'activationLink', 'active', 'gender', 'address', 'family_location', 'createdOn', 'lastUpdatedOn'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $query->join('LEFT JOIN','auth_assignment','auth_assignment.user_id = id')
      ->andFilterWhere(['auth_assignment.item_name' => 'User']);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'school' => $this->school,
            'batch' => $this->batch,
            'psu_employer' => $this->psu_employer,
            'country' => $this->country,
            'city' => $this->city,
            'current_employer' => $this->current_employer,
            'sector' => $this->sector,
            'createdOn' => $this->createdOn,
            'lastUpdatedOn' => $this->lastUpdatedOn,
        ]);

        $query->andFilterWhere(['like', 'firstName', $this->firstName])
            ->andFilterWhere(['like', 'lastName', $this->lastName])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'activationLink', $this->activationLink])
            ->andFilterWhere(['like', 'active', $this->active])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'family_location', $this->family_location]);

        return $dataProvider;
    }
}
