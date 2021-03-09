<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PropertySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'street_address') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'purchase_price') ?>

    <?php // echo $form->field($model, 'purchase_closing_cost') ?>

    <?php // echo $form->field($model, 'interest_rate') ?>

    <?php // echo $form->field($model, 'points_charged') ?>

    <?php // echo $form->field($model, 'loan_term') ?>

    <?php // echo $form->field($model, 'gross_monthly_income') ?>

    <?php // echo $form->field($model, 'property_taxes') ?>

    <?php // echo $form->field($model, 'insurance') ?>

    <?php // echo $form->field($model, 'repairs_maintenance') ?>

    <?php // echo $form->field($model, 'vacancy') ?>

    <?php // echo $form->field($model, 'capital_expenditures') ?>

    <?php // echo $form->field($model, 'management_fees') ?>

    <?php // echo $form->field($model, 'electricity') ?>

    <?php // echo $form->field($model, 'gas') ?>

    <?php // echo $form->field($model, 'water_sewer') ?>

    <?php // echo $form->field($model, 'hoa_fees') ?>

    <?php // echo $form->field($model, 'garbage') ?>

    <?php // echo $form->field($model, 'other') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
