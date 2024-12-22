<?php

namespace frontend\controllers;

use frontend\models\Person;
use yii\web\Controller;

class PersonController extends Controller
{
  public function actionIndex()
  {
      $model = new Person();
      return $this->render('index', ['model' => $model]);
  }
}