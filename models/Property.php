<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property".
 *
 * @property int $id
 * @property string $street_address
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property int $purchase_price
 * @property int $purchase_closing_cost
 * @property float $interest_rate
 * @property float $points_charged
 * @property int $loan_term
 * @property int $gross_monthly_income
 * @property int $property_taxes
 * @property int $insurance
 * @property int $repairs_maintenance
 * @property int $vacancy
 * @property int $capital_expenditures
 * @property int $management_fees
 * @property int $electricity
 * @property int $gas
 * @property int $water_sewer
 * @property int $hoa_fees
 * @property int $garbage
 * @property int $other
 */
class Property extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'property';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['street_address', 'city', 'state', 'zip', 'purchase_price', 'purchase_closing_cost', 'interest_rate', 'loan_term', 'gross_monthly_income', 'property_taxes', 'insurance', 'repairs_maintenance', 'vacancy', 'capital_expenditures', 'electricity'], 'required'],
            [['zip', 'purchase_price', 'purchase_closing_cost', 'loan_term', 'gross_monthly_income', 'property_taxes', 'insurance', 'repairs_maintenance', 'vacancy', 'capital_expenditures', 'management_fees', 'electricity', 'gas', 'water_sewer', 'hoa_fees', 'garbage', 'other'], 'integer'],
            [['interest_rate', 'points_charged'], 'number'],
            [['street_address'], 'string', 'max' => 100],
            [['city', 'state'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'street_address' => 'Street Address',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'purchase_price' => 'Purchase Price',
            'purchase_closing_cost' => 'Purchase Closing Cost',
            'interest_rate' => 'Interest Rate',
            'points_charged' => 'Points Charged',
            'loan_term' => 'Loan Term',
            'gross_monthly_income' => 'Gross Monthly Income',
            'property_taxes' => 'Property Taxes',
            'insurance' => 'Insurance',
            'repairs_maintenance' => 'Repairs Maintenance',
            'vacancy' => 'Vacancy',
            'capital_expenditures' => 'Capital Expenditures',
            'management_fees' => 'Management Fees',
            'electricity' => 'Electricity',
            'gas' => 'Gas',
            'water_sewer' => 'Water Sewer',
            'hoa_fees' => 'Hoa Fees',
            'garbage' => 'Garbage',
            'other' => 'Other',
        ];
    }
}
