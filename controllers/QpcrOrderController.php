<?php

namespace app\controllers;

use Yii;
use app\models\QpcrOrder;
use app\models\QpcrOrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use dektrium\user\filters\AccessRule;


/**
 * QpcrOrderController implements the CRUD actions for QpcrOrder model.
 */
class QpcrOrderController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
			'access' => [
			    'class' => AccessControl::className(),
			    'ruleConfig' => [
			        'class' => AccessRule::className(),
			    ],
			    'rules' => [
			        [
			            'actions' => ['delete'],
			            'allow' => true,
			            'roles' => ['super-boss','admin'],
			        ],
			        [
			            'actions' => ['index'],
			            'allow' => true,
			            'roles' => ['?', '@'],
			        ],
			        [
			            'actions' => ['update', 'create','view', 'list'],
			            'allow' => true,
			            'roles' => ['@'],
			        ],
			    ],
			],
        ];
    }

    /**
     * View QpcrOrder product page.
     * @return create form
     */
    public function actionIndex()
    {
        $model = new QpcrOrder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            if (!Yii::$app->user->isGuest) {
                $model->user_id = Yii::$app->user->identity->id;
                $model->name = Yii::$app->user->identity->username;
                $model->email = Yii::$app->user->identity->email;
            }
            // $model->user_id = Yii::$app->user->identity->id;
            $model->title = "InstantPCR™ qPCR";
            $model->technology = 'qPCR';
            $model->chemistry = 'SYBR GREEN';
            $model->application = '基因表达';
            $model->timestamp = time();
            $model->organism = "人";
            // $model->name = Yii::$app->user->identity->username;
            // $model->email = Yii::$app->user->identity->email;
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Lists all QpcrOrder models.
     * @return mixed
     */
    public function actionList()
    {
        $searchModel = new QpcrOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ( !Yii::$app->user->can('employee') ) {
            $dataProvider->query->andWhere(['user_id' => Yii::$app->user->identity->id]);
        }

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single QpcrOrder model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new QpcrOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new QpcrOrder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->sendOrder("New qPCR Order ".time(), "qpcr-order", ['content' => $model]);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $model->user_id = Yii::$app->user->identity->id;
            $model->title = "InstantPCR™ qPCR";
            $model->technology = 'qPCR';
            $model->chemistry = 'SYBR GREEN';
            $model->application = '基因表达';
            $model->timestamp = time();
            $model->organism = "人";
            $model->name = Yii::$app->user->identity->username;
            $model->email = Yii::$app->user->identity->email;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing QpcrOrder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing QpcrOrder model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the QpcrOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return QpcrOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = QpcrOrder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
