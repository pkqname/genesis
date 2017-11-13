<?php

namespace Pkqname\Notes\controllers;

use Pkqname\Notes\models\Notes;
use Pkqname\Notes\StatAssetsBundle;
use Yii;
use yii\web\Controller;




class StatController extends Controller
{

    public $layout = 'main';

    public function actionIndex()
    {
        // регистрируем ресурсы:
        StatAssetsBundle::register($this->view);

        $notes = Notes::find()->all();


        return $this->render('index', compact('notes'));
    }

    public function actionSingle(int $id=null)
    {
        // регистрируем ресурсы:
        StatAssetsBundle::register($this->view);

        $note = Notes::find()->where(['id' => $id])->one();

        return $this->render('single', compact('note'));
    }

    public function actionEdit(int $id=null)
    {
        // регистрируем ресурсы:
        StatAssetsBundle::register($this->view);

        $model = Notes::find()->where(['id' => $id])->one();
        if ($model->load(Yii::$app->request->post())){
            $model->date_change = date("Y-m-d H:i:s");
            $model->save();
            return $this->redirect(['/notes/'.$model->id]);
        }

        return $this->render('edit', compact('model'));
    }

    public function actionDelete(int $id=null)
    {
        // регистрируем ресурсы:
        StatAssetsBundle::register($this->view);

        $model = Notes::find()->where(['id' => $id])->one();
        $model->delete();

        return $this->redirect(['notes']);
    }

    public function actionAdded()
    {
        // регистрируем ресурсы:
        StatAssetsBundle::register($this->view);

        $model = new Notes();
        if($model->load(Yii::$app->request->post())) {
            $model->date = date("Y-m-d H:i:s");
            $model->date_change = date("Y-m-d H:i:s");
            $model->save();
            return $this->redirect(['/notes/'.$model->id]);
        }

        return $this->render('edit', compact('model'));
    }


}
