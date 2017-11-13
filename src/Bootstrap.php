<?php

namespace Pkqname\Notes;

use Yii;
use yii\base\BootstrapInterface;



class Bootstrap implements BootstrapInterface{

    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {
        //Правила маршрутизации
        $app->getUrlManager()->addRules([
            'notes' => 'notes/stat/index',
            'notes/<id:\d+>' => 'notes/stat/single',
            'notes/edit/<id:\d+>' => 'notes/stat/edit',
            'notes/delete/<id:\d+>' => 'notes/stat/delete',
            'notes/added' => 'notes/stat/added',
        ], false);

         $app->setModule('notes', 'Pkqname\Notes\Module');


    }
}