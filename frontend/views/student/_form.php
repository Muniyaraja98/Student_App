<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Schoolclass;
use common\models\Taluk;
use common\models\District;
use common\models\State;
use common\models\Country;
use yii\helpers\Url;
use kartik\depdrop\DepDrop;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'student_image')->fileInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 's_roll_number')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'schoolclass_id')->dropDownList(ArrayHelper::map(Schoolclass::find()->all(), 'id','class_name'),['prompt'=>'Select Your Class']) ?> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 's_address')->textInput(['maxlength' => true]) ?>        
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'country_id')->dropDownList(ArrayHelper::map(Country::find()->all(), 'id','country_name'),['prompt'=>'Select Your Country','id'=>'countryid']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'state_id')->widget(DepDrop::classname(), [
                'options'=>['id'=>'student-state_id','prompt'=>'Select State','id'=>'stateid'],
                'pluginOptions'=>[
                    'depends'=>['countryid'],
                    'placeholder'=>'Select State...',
                    'url'=>Url::to(['/student/state'])
                ]]);
            ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'district_id')->widget(DepDrop::classname(), [
                'options'=>['id'=>'student-district_id','prompt'=>'Select District','id'=>'districtid'],
                'pluginOptions'=>[
                    'depends'=>['stateid'],
                    'placeholder'=>'Select District...',
                    'url'=>Url::to(['/student/district'])
                ]]);
            ?>
        </div>
    </div>   
    <?= $form->field($model, 'taluk_id')->widget(DepDrop::classname(), [
    'options'=>['id'=>'student-taluk_id','prompt'=>'Select Taluk'],
    'pluginOptions'=>[
        'depends'=>['districtid'],
        'placeholder'=>'Select Taluk...',
        'url'=>Url::to(['/student/taluk'])
       ]]);
    ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
