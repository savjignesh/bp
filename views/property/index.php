<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PropertySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Properties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="property-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Property', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'street_address',
            'city',
            'state',
            'zip',
            //'purchase_price',
            //'purchase_closing_cost',
            //'interest_rate',
            //'points_charged',
            //'loan_term',
            //'gross_monthly_income',
            //'property_taxes',
            //'insurance',
            //'repairs_maintenance',
            //'vacancy',
            //'capital_expenditures',
            //'management_fees',
            //'electricity',
            //'gas',
            //'water_sewer',
            //'hoa_fees',
            //'garbage',
            //'other',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
