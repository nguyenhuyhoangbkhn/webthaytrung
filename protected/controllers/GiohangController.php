<?php

class GiohangController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','Giohang'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Giohang;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Giohang']))
		{
			$idbook = intval($_POST['Giohang']["id_book"]);
			$namebook = intval($_POST['Giohang']["name_book"]);
			$cost = intval($_POST['Giohang']["cost"]);
			$status = intval($_POST['Giohang']["status"]);
			$number = intval($_POST['Giohang']["number"]);
			$iduser = Yii::app()->user->id;

			// update so luong sach
			$book=Book::model()->findByPk($idbook);
			// Book::model()->loadModel($idbook);
			if ($book->slcon >= $number) {
				$book->slcon = $book->slcon - $number;
				$book->save();



			$model->id_book = $idbook;
			$model->name_book = $namebook;
			$model->cost = $cost;
			$model->status = $status;
			$model->number = $number;
			$model->id_user = $iduser;

			$model->attributes=$_POST['Giohang'];
			if($model->save())
				// $this->redirect(array('view','id'=>$model->id));
				$this->redirect(array('//site/index'));
		}
		}

		// $this->render('create',array(
		// 	'model'=>$model,
		// ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$gio1 = Giohang::model()->findByPk($id);
		$a = $gio1->number;
		
		$book=Book::model()->findByPk($gio1->id_book);
		if(isset($_POST['Giohang']))
		{


			$model->attributes=$_POST['Giohang'];
			if($model->save()){
				print_r($book->slcon);
				$book->slcon = $book->slcon + $a - $model->number;
				print_r($book->slcon);
				$book->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}
		// print_r($model->id_book);
		// print_r($a);
	
		
		$book->save();

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Giohang');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	public function actionGiohang()
	{
		$criteria= new CDbCriteria();
		$iduser = Yii::app()->user->id;
		// $criteria->addCondition('id_user',$iduser);
		$criteria->compare('id_user',$iduser);
		$criteria->compare('status',1);
		// $criteria->order = 'id_user desc';
		$dataProvider=new CActiveDataProvider('Giohang',array(
			'criteria'=>$criteria,
			));
	
		$this->render('giohang',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Giohang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Giohang']))
			$model->attributes=$_GET['Giohang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Giohang the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Giohang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Giohang $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='giohang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
