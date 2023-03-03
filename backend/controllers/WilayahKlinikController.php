<?php

namespace backend\controllers;

use common\models\WilayahKlinik;
use common\models\WilayahKlinikSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WilayahKlinikController implements the CRUD actions for WilayahKlinik model.
 */
class WilayahKlinikController extends Controller
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
     * Lists all WilayahKlinik models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WilayahKlinikSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single WilayahKlinik model.
     * @param int $id_wilayahklinik Id Wilayahklinik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_wilayahklinik)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_wilayahklinik),
        ]);
    }

    /**
     * Creates a new WilayahKlinik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new WilayahKlinik();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_wilayahklinik' => $model->id_wilayahklinik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing WilayahKlinik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_wilayahklinik Id Wilayahklinik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_wilayahklinik)
    {
        $model = $this->findModel($id_wilayahklinik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_wilayahklinik' => $model->id_wilayahklinik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing WilayahKlinik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_wilayahklinik Id Wilayahklinik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_wilayahklinik)
    {
        $this->findModel($id_wilayahklinik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WilayahKlinik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_wilayahklinik Id Wilayahklinik
     * @return WilayahKlinik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_wilayahklinik)
    {
        if (($model = WilayahKlinik::findOne(['id_wilayahklinik' => $id_wilayahklinik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
