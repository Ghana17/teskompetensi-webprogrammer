<?php

namespace backend\controllers;

use common\models\Golongan;
use common\models\GolonganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GolonganController implements the CRUD actions for Golongan model.
 */
class GolonganController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Golongan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new GolonganSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Golongan model.
     * @param int $id_golobat Id Golobat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_golobat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_golobat),
        ]);
    }

    /**
     * Creates a new Golongan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Golongan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_golobat' => $model->id_golobat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Golongan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_golobat Id Golobat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_golobat)
    {
        $model = $this->findModel($id_golobat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_golobat' => $model->id_golobat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Golongan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_golobat Id Golobat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_golobat)
    {
        $this->findModel($id_golobat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Golongan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_golobat Id Golobat
     * @return Golongan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_golobat)
    {
        if (($model = Golongan::findOne(['id_golobat' => $id_golobat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
