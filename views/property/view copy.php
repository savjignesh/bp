<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Property */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="property-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'street_address',
            'city',
            'state',
            'zip',
            'purchase_price',
            'purchase_closing_cost',
            'interest_rate',
            'points_charged',
            'loan_term',
            'gross_monthly_income',
            'property_taxes',
            'insurance',
            'repairs_maintenance',
            'vacancy',
            'capital_expenditures',
            'management_fees',
            'electricity',
            'gas',
            'water_sewer',
            'hoa_fees',
            'garbage',
            'other',
        ],
    ]) ?>

</div>
