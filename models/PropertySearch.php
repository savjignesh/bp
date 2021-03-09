<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Property;

/**
 * PropertySearch represents the model behind the search form of `app\models\Property`.
 */
class PropertySearch extends Property
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'zip', 'purchase_price', 'purchase_closing_cost', 'loan_term', 'gross_monthly_income', 'property_taxes', 'insurance', 'repairs_maintenance', 'vacancy', 'capital_expenditures', 'management_fees', 'electricity', 'gas', 'water_sewer', 'hoa_fees', 'garbage', 'other'], 'integer'],
            [['street_address', 'city', 'state'], 'safe'],
            [['interest_rate', 'points_charged'], 'number'],
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
        $query = Property::find();

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
            'id' => $this->id,
            'zip' => $this->zip,
            'purchase_price' => $this->purchase_price,
            'purchase_closing_cost' => $this->purchase_closing_cost,
            'interest_rate' => $this->interest_rate,
            'points_charged' => $this->points_charged,
            'loan_term' => $this->loan_term,
            'gross_monthly_income' => $this->gross_monthly_income,
            'property_taxes' => $this->property_taxes,
            'insurance' => $this->insurance,
            'repairs_maintenance' => $this->repairs_maintenance,
            'vacancy' => $this->vacancy,
            'capital_expenditures' => $this->capital_expenditures,
            'management_fees' => $this->management_fees,
            'electricity' => $this->electricity,
            'gas' => $this->gas,
            'water_sewer' => $this->water_sewer,
            'hoa_fees' => $this->hoa_fees,
            'garbage' => $this->garbage,
            'other' => $this->other,
        ]);

        $query->andFilterWhere(['like', 'street_address', $this->street_address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
