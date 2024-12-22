<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin(['id'=> 'person-form', 'options' => ['class' => 'form-horizontal']]);
echo $form->field($model, 'firstname');
echo $form->field($model, 'lastname');
echo $form->field($model, 'email')->input('email');
echo $form->field($model, 'gender')->radioList(['male'=>'Male', 'female'=>'Female']);
echo Html::submitButton('Yuborish', ['class' => 'btn btn-primary']);