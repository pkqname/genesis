<?php

namespace Pkqname\Notes\controllers;

use Yii;
use yii\web\Controller;
use Klisl\Statistics\models\Model;



class StatController extends Controller
{

    public $layout = 'main';

    public function actionIndex($condition = [], $days_ago = null, $stat_ip = false)
    {
        // регистрируем ресурсы:
        \Klisl\Statistics\StatAssetsBundle::register($this->view);


        return $this->render('index', []);
    }


}
