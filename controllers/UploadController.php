<?php

namespace app\controllers;

use app\models\LessonRecord;
use Yii;
use app\models\CourseRecord;
use app\models\AdminCourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Response;
use app\models\UploadForm;

/**
 * AdmincourseController implements the CRUD actions for CourseRecord model.
 * 
 * 
 * 
 * Влад
Спасибо за статью! А переменную Yii::$app->params[‘pathUploads’] — где устанавливать?
on 16.11.2016 Ответить
admin
В файле config/params.php
Полный код файла:
        < ?php
        return [
        ‘adminEmail’ => ‘admin@example.com’,
        ‘pathUploads’ => realpath(dirname(__FILE__)).’\..\web\img\user_photo\\’,
        ];
        Вместо «realpath(dirname(__FILE__)).’\..\web\img\user_photo\\» указать необходимый путь
 * 
 * 
 * 
 */
class UploadController extends Controller {

    public function actionIndex() {
        $model = new UploadForm();
        if (Yii::$app->request->post()) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->validate()) {
                $path = Yii::$app->params['pathUploads'] . 'test/';
                //$model->file->saveAs($path . $model->file);
                $model->file->saveAs($path .time().'.'. $model->file->getExtension());
                $model->path= $path .time().'.'. $model->file->getExtension();
            }
        }
        return $this->render('index', ['model' => $model]);
    }
    



    public function actionJs()
    {
        return $this->render('js');
    }

    public function actionAns()
    {
        if (Yii::$app->request->isAjax)
        {
            $test = 'Hi, Wal ';
            Yii::$app->response->format = Response::FORMAT_JSON;
            return['test'=>$test];
        }

        return ['test'=>""];

    }

    public function actionAns2()
    {
        if (Yii::$app->request->isAjax)
        {
            $test="";
            //$test = 'Hi, Wal ';
            $rec=LessonRecord::findOne(1);
            $test = $rec->title;

            Yii::$app->response->format = Response::FORMAT_JSON;
            return['response'=>$test];
        }

        return ['response'=>""];

    }

    public function actionJson1()
    {
        if (Yii::$app->request->isAjax)
        {
            $test="";
            Yii::$app->response->format = Response::FORMAT_JSON;
            //$test = 'Hi, Wal ';
            $rec=LessonRecord::findOne(1);
           // $test = $rec;
             // $rec=['some', 'array', 'of', 'data' => ['associative', 'array']];


           //   var_dump($rec);
            return['response'=>$rec];
        }

        return ['response'=>""];

    }

    // дальнейшие действия данного контроллера - работа с данными POST через JS

    //переход на страницу тестов Post
    public function actionJsonpost()
    {
        //переход на страницу тестов Post
        return $this->render('jsonpost');
    }

  //получение данных через post
    public function post2()
    {
        if (Yii::$app->request->isAjax)
        {
            $test="";
            Yii::$app->response->format = Response::FORMAT_JSON;
            //$test = 'Hi, Wal ';
            $rec=LessonRecord::findOne(1);
            // $test = $rec;
            // $rec=['some', 'array', 'of', 'data' => ['associative', 'array']];


            //   var_dump($rec);
            return['response'=>$rec];
        }

        return ['response'=>""];

    }
}
