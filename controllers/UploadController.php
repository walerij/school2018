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
 */
class UploadController extends Controller {

    public function actionIndex() {
        $model = new UploadForm();
        if (Yii::$app->request->post()) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->validate()) {
                $path = Yii::$app->params['pathUploads'] . 'test/';
                $model->file->saveAs($path . $model->file);
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

}
