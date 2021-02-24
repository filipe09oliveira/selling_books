<?php

namespace frontend\controllers;

use common\components\AccessRule;
use common\models\ClientBook;
use common\models\User;
use Yii;
use common\models\Book;
use frontend\models\BookSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BookController implements the CRUD actions for Book model.
 */
class BookController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'ruleConfig' => [
                    'class' => AccessRule::class,
                ],
                'rules' => [
                    [
                        'actions' => [
                            'index',
                            'comprados',
                            'comprar',
                            'retirar',
                            'create',
                            'livros-venda',
                            'view',
                            'update',
                            'delete',
                            'search',
                        ],
                        'allow' => true,
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BookSearch();
        $searchModel->status = Book::AVENDA;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionComprados()
    {
        $client = Yii::$app->user->identity;
        $meusLivros = ClientBook::find()->where(['client_id' => $client->id])->all();

        return $this->render('meus_livros', [
            'meusLivros' => $meusLivros,
        ]);
    }

    public function actionRetirar($book_id)
    {
        $client = Yii::$app->user->identity;
        $book = Book::find()->where(['id' => $book_id])->one();
        $clientBook = ClientBook::find()->where(['client_id' => $client->id])->andWhere(['book_id' => $book_id])->one();

        $book->status = Book::AVENDA;
        if ($book->save() && $clientBook->delete()){
            $this->redirect(['comprados']);
        }
    }

    public function actionComprar($book_id)
    {
        $book = Book::find()->where(['id' => $book_id])->one();
        $clientBook = new ClientBook();

        $clientBook->client_id = Yii::$app->user->identity->id;
        $clientBook->book_id = $book_id;
        $book->status = Book::VENDIDO;
        if ($clientBook->save() && $book->save()) {
            return $this->redirect(['index']);
        }
    }


    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Lists all Book models.
     * @return mixed
     */
    public function actionLivrosVenda($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Book model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Book();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Book model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Book model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Book model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
