<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h2>Property information</h2>
            <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'zip')->textInput() ?>

        </div>
        <div class="col-md-6 col-sm-12">
            <h2>Purchase & Loan Details</h2>
            <?= $form->field($model, 'purchase_price')->textInput() ?>

            <?= $form->field($model, 'down_payment')->textInput() ?>

            <?= $form->field($model, 'purchase_closing_cost')->textInput() ?>

            <?= $form->field($model, 'estimated_repair_cost')->textInput() ?>

            <?= $form->field($model, 'interest_rate')->textInput() ?>

            <?= $form->field($model, 'points_charged')->textInput() ?>

            <?= $form->field($model, 'loan_term')->textInput() ?>
        </div>
    </div>
  
    <hr />
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h2>Rental income</h2>
            <?= $form->field($model, 'gross_monthly_income')->textInput() ?>
            <br />
            <h2>Expenses</h2>
            <?= $form->field($model, 'property_taxes')->textInput() ?>

            <?= $form->field($model, 'insurance')->textInput() ?>

            <?= $form->field($model, 'repairs_maintenance')->textInput() ?>

            <?= $form->field($model, 'vacancy')->textInput() ?>

            <?= $form->field($model, 'capital_expenditures')->textInput() ?>
        </div>
   
        <div class="col-md-6 col-sm-12">
            
            <?= $form->field($model, 'management_fees')->textInput() ?>

            <?= $form->field($model, 'electricity')->textInput() ?>

            <?= $form->field($model, 'gas')->textInput() ?>

            <?= $form->field($model, 'water_sewer')->textInput() ?>

            <?= $form->field($model, 'hoa_fees')->textInput() ?>

            <?= $form->field($model, 'garbage')->textInput() ?>

            <?= $form->field($model, 'other')->textInput() ?>

           

        </div>
    </div>    
    <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>    
    </div>
    



      
    <?php ActiveForm::end(); ?>

</div>
