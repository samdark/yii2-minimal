<?php

namespace app\commands;

use yii\console\Controller;

class HelloController extends Controller
{

    public function actionIndex()
    {
        echo "Hello world\n";
    }
}
