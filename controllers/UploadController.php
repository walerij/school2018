<?php

namespace app\controllers;

use Yii;
use app\models\CourseRecord;
use app\models\AdminCourseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
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

}
