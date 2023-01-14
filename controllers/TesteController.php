<?php

namespace app\controllers;

use yii\web\Controller; #importação

class TesteController extends Controller{
    public function actionTeste($message='OLLLAAAAAA   DEU CERTOOOOOOOOO!!!!!!'){
        return $this->render('teste', [
            'message' => $message
        ]);
    }
}