<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Property */

$this->title = Html::encode($model->street_address.', '.$model->city.', '.$model->state.', '.$model->zip);
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = Html::encode($model->street_address.', '.$model->city.', '.$model->state.', '.$model->zip);
\yii\web\YiiAsset::register($this);
?>
<div class="property-view">

    <h1><?= Html::encode($model->street_address.', '.$model->city.', '.$model->state.', '.$model->zip) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <br />
    <?php
    Full_calculation_with_discount($model, $model->purchase_price);
    // 5%
    Full_calculation_with_discount($model, $model->purchase_price, 5);
    // 10%
    Full_calculation_with_discount($model, $model->purchase_price, 10);
    // 15%
    Full_calculation_with_discount($model, $model->purchase_price, 15);
    // 20%
    Full_calculation_with_discount($model, $model->purchase_price, 20);
    // 30%
    Full_calculation_with_discount($model, $model->purchase_price, 30);
    // 40%
    Full_calculation_with_discount($model, $model->purchase_price, 40);

        function PMT($interest,$num_of_payments,$PV,$FV = 0.00, $Type = 0){
            $xp=pow((1+$interest),$num_of_payments);
            return
                ($PV* $interest*$xp/($xp-1)+$interest/($xp-1)*$FV)*
                ($Type==0 ? 1 : 1/($interest+1));
        }

        function Full_calculation_with_discount($model, $original_price, $discount=0){
            
            $purchase_price = $original_price;
            if($discount !== 0){
                $purchase_price = $original_price - ($original_price * $discount/100);
            }
            
            $down_payment = $purchase_price * ($model->down_payment/100);
            $loan_amount = $purchase_price - ($purchase_price * ($model->down_payment/100));
            $total_no_of_payments = $model->loan_term * 12;
            $monthly_mortage_payment = PMT(($model->interest_rate/100)/12, $total_no_of_payments, $loan_amount, 0) ;
            $monthly_expenses = $monthly_mortage_payment + ($model->property_taxes/12) + $model->insurance + 
                                ($model->gross_monthly_income * ($model->repairs_maintenance/100)) + 
                                ($model->gross_monthly_income * ($model->vacancy/100)) + 
                                ($model->gross_monthly_income * ($model->capital_expenditures/100)) +
                                ($model->gross_monthly_income * ($model->management_fees/100));
            $total_cash_needed = ($purchase_price * ($model->down_payment/100)) + $model->purchase_closing_cost + $model->estimated_repair_cost;
            $monthly_cashflow = $model->gross_monthly_income - $monthly_expenses;
            $roi = ((($monthly_cashflow * 12)/$total_cash_needed) * 100);
            $noi = (($model->gross_monthly_income * 12) - ($monthly_expenses * 12));

    ?>
    <div class="row">
             <div class="col-md-5 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4 class="bp_titleh4"><?= $discount.'%'; ?></h4>$<?php echo number_format($purchase_price); ?><br />
                        <span class="bp_title">Purchase Price</span>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table>
                            <tr>
                                <td><span class="bp_title">Purchase Closing Cost</span></td>
                                <td> $<?php echo number_format($model->purchase_closing_cost); ?></td>
                            </tr>
                            <tr>
                                <td><span class="bp_title">Estimated Repairs</span></td>
                                <td> $<?php echo number_format($model->estimated_repair_cost); ?></td>
                            </tr>

                            <tr>
                                <td><span class="bp_title">Down Payment</span></td>
                                <td> $<?php echo number_format($down_payment); ?></td>
                            </tr>
                            <tr>
                                <td><span class="bp_title">Loan Amount</span></td>
                                <td> $<?php echo number_format($loan_amount); ?></td>
                            </tr>

                            <tr>
                                <td><span class="bp_title">Amortized Over</span></td>
                                <td> <?php echo number_format($model->loan_term); ?> years</td>
                            </tr>
                            <tr>
                                <td><span class="bp_title">Loan Interest Rate</span></td>
                                <td><?php echo number_format($model->interest_rate); ?>%</td>
                            </tr>
                            <tr>
                                <td><span class="bp_title">Monthly P&I</span></td>
                                <td>$<?php echo number_format($monthly_mortage_payment,2); ?></td>
                            </tr>

                        </table>
                    </div>
                </div>
               
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12">
                
                <table>
                    <tr>
                        <td class="space1">
                            $<?php echo number_format($model->gross_monthly_income); ?><br />
                            <span class="bp_title">Monthly Income</span>
                        </td>
                        <td class="space1">
                            $<?php echo number_format($monthly_expenses); ?><br />
                            <span class="bp_title">Monthly Expenses</span>
                        </td>
                        <td class="space1">
                            $<?php echo number_format($monthly_cashflow); ?><br />
                            <span class="bp_title">Monthly Cashflow</span>
                        </td>
                        <td class="space1">
                           
                        </td>
                    </tr>
                    <tr>
                        <td class="space1">
                            $<?php echo number_format($noi); ?><br />
                            <span class="bp_title">NOI</span>
                        </td>
                        <td class="space1">
                            $<?php echo number_format($total_cash_needed); ?><br />
                            <span class="bp_title">Total Cash Needed</span>
                        </td>
                        <td class="space1">
                            <?php echo number_format($roi); ?>%<br />
                            <span class="bp_title">Cash on Cash ROI</span>
                        </td>
                        <td class="space1">
                            $<?php echo number_format($purchase_price); ?><br />
                            <span class="bp_title">Purchase Cap Rate</span>
                        </td>
                    </tr>
                </table>
                
            </div>
           
    </div>
    <hr />
    <?php } 
     
    
    ?>
</div>
