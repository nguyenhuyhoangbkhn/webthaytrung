<?php

/**
 * This is the model class for table "comments".
 *
 * @property-read CommentModule $module the comment module
 * @property string $type this is set to one of the commentableModels scope from CommentModule
 * @property mixed  $key the primary key of the AR this comment belongs to
 *
 * The followings are the available columns in table 'comments':
 * @property integer $id
 * @property string  $message
 * @property integer $userId
 * @property integer $createDate
 *
 * The followings are the available model relations:
 * @property Users $user
 * @property CommentsCommitMap $commentsCommitMap
 *
 * @author Carsten Brandt <mail@cebe.cc>
 * @package yiiext.modules.comment
 */
class Comment extends CActiveRecord
{
	private $_type;
	private $_key;
	private $thiskey;
	private $count;
	private $a;
	private $_new = false;

	/**
	 * @var string set the commentableModels scope from CommentModule
	 */
	public function setType($type)
	{
		$this->_type = strtolower($type);
	}

	/**
	 * @return string get the comments scope
	 */
	public function getType()
	{
		return $this->_type;
	}

	/**
	 * @var mixed set the primary key of the AR this comment belongs to
	 */
	public function setKey($key)
	{
		$this->_key = $key;
	}

	/**
	 * @return mixed the primary key of the AR this comment belongs to
	 */
	public function getKey()
	{
		return $this->_key;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CommentModule the comment module instance
	 */
	public function getModule()
	{
		return Yii::app()->getModule('comment');
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comments';
	}

	public function behaviors()
	{
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'createDate',
				'updateAttribute' => null,
				// need special DbExpression when db is sqlite
				'timestampExpression' => (strncasecmp('sqlite', $this->dbConnection->driverName, 6)===0) ?
					new CDbExpression("datetime('now')") : null,
			),
		);
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('message, rate1, rate2, rate3, rate4, rate5', 'safe'),
			array('type', 'validateType', 'on'=>'create'),
			array('key',  'validateKey',  'on'=>'create'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, message, rate1, rate2, userId', 'safe', 'on'=>'search'),
		);
		
	}

	public function validateType()
	{
		if (!isset($this->module->commentableModels[$this->type])) {
			throw new CException('comment type ' . $this->type . ' not defined in CommentModule!');
		}
	}

	public function validateKey()
	{
		$commentableModel = CActiveRecord::model($this->module->commentableModels[$this->type]);
		if ($commentableModel->asa('commentable') === null) {
			throw new CException('commentable Model must have behavior CommentableBehavior attached!');
		}
		if ($commentableModel->findByPk($this->key) === null) {
			throw new CException('comment related record does not exist!');
		}
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'user' => array(self::BELONGS_TO, $this->module->userModelClass, 'userId'),
		);
	}

	protected function beforeSave()
	{

		if($this->isNewRecord)
			{
			
				$this->_new = $this->isNewRecord;	
			}
		
		return parent::beforeSave();
	}

	

	protected function addPointTeacher($models,$thiskey)
	{
			$list=$models[0]->attributes;
			$count=$list['count'];//get lay so rate tu truoc
			$a=$list['rate1'];$b=$list['rate2'];$c=$list['rate3'];
			$d=$list['rate4'];$e=$list['rate5'];
			$m=5;
			$colArr=$this->attributes;
								    	
			    $key=key($colArr);

			    //$val=$colArr[$key];	
		     	$a=round(($a*$count+$this->rate1)/($count+1),1);
		     	$b=round(($b*$count+$this->rate2)/($count+1),1);
		     	$c=round(($c*$count+$this->rate3)/($count+1),1);
		     	$d=round(($d*$count+$this->rate4)/($count+1),1);
		     	$e=round(($e*$count+$this->rate5)/($count+1),1);

			 $count=$count+1;
			 $f=$a+$b+$c+$d+$e;
			 //$this->average=round($this->average/$count,1);
			 $f=round($f/$m,1);
					

			Yii::app()->db
			->createCommand("UPDATE tbl_teacher 
				SET rate1=:rate1,rate2=:rate2,rate3=:rate3,rate4=:rate4,rate5=:rate5,average=:average,count=:count 
				WHERE id=:id")
			->bindValues(
				array(':id'=>$thiskey,':rate1'=>$a,':rate2'=>$b,':rate3'=>$c,':rate4'=>$d,':rate5'=>$e,':average'=>$f,':count'=>$count))
			->execute();
			return true;
	}

	protected function addPointSchool($model2,$thiskey)
	{

			$list=$model2[0]->attributes;
			$count=$list['count'];//get lay so rate tu truoc
			$a=$list['rate1'];$b=$list['rate2'];$c=$list['rate3'];
			$d=$list['rate4'];$e=$list['rate5'];
			$m=5;
			$colArr=$this->attributes;
					

			    $key=key($colArr);

		     	$a=round(($a*$count+$this->rate1)/($count+1),1);
		     	$b=round(($b*$count+$this->rate2)/($count+1),1);
		     	$c=round(($c*$count+$this->rate3)/($count+1),1);
		     	$d=round(($d*$count+$this->rate4)/($count+1),1);
		     	$e=round(($e*$count+$this->rate5)/($count+1),1);

			 $count=$count+1;
			 $f=$a+$b+$c+$d+$e;
			 //$this->average=round($this->average/$count,1);
			 $f=round($f/$m,1);
					

			Yii::app()->db
			->createCommand("UPDATE tbl_school 
				SET rate1=:rate1,rate2=:rate2,rate3=:rate3,rate4=:rate4,rate5=:rate5,average=:average,count=:count 
				WHERE id=:id")
			->bindValues(
				array(':id'=>$thiskey,':rate1'=>$a,':rate2'=>$b,':rate3'=>$c,':rate4'=>$d,':rate5'=>$e,':average'=>$f,':count'=>$count))
			->execute();
			return true;
	}


	protected function afterSave()
	{
		
		if ($this->_new) {
			$commentedModel = CActiveRecord::model($this->module->commentableModels[$this->type]);
			// if comment is new, connect it with commended model
			$this->getDbConnection()->createCommand(
				"INSERT INTO ".$commentedModel->mapTable."(".$commentedModel->mapCommentColumn.", ".$commentedModel->mapRelatedColumn.")
				 VALUES (:id, :key);"
			)->execute(array(':id' => $this->id, ':key' => $this->key));

			parent::afterSave();

			// raise new comment event
			$this->module->onNewComment($this, $commentedModel->findByPk($this->key));
		} else {
			parent::afterSave();
		}
		$this->module->onUpdateComment($this/*, $commentedModel->findByPk($this->key)*/);
		
		$thiskey=$this->key;
		if (isset($this->key)) {
				$model2 = School::model()->findAll(
					 array("condition"=>"id =  $this->key",'select'=>'rate2, rate1,rate3,rate4,rate5,count',));
			}
			else $model2=NULL;
		if ($model2<>NULL)
		{
			self::addPointSchool($model2,$thiskey);
		}
		if (isset($this->key)) {
			$models = Teacher::model()->findAll(
					 array("condition"=>"id =  $this->key",'select'=>'rate1,rate2,rate3,rate4,rate5,count'));
				} else
				{ $models=NULL; }
		if ($models<>NULL)
		{
			self::addPointTeacher($models,$thiskey);	
		}
		// raise update comment event
		
	}

	protected function minusPointTeacher($model2,$key)
	{
			$list=$model2[0]->attributes;
			$count=$list['count'];//get lay so rate tu truoc
			$a=$list['rate1'];$b=$list['rate2'];$c=$list['rate3'];
			$d=$list['rate4'];$e=$list['rate5'];
			$m=5;
						    
			    //$val=$colArr[$key];
			    
		     if (($count==1) or ($count==0))
		     {
		     	$a=$b=$c=$d=$e=0; $count=0;
		     }	else{


		     	$a=round(($a*$count-$this->rate1)/($count-1),1);
		     	$b=round(($b*$count-$this->rate2)/($count-1),1);
		     	$c=round(($c*$count-$this->rate3)/($count-1),1);
		     	$d=round(($d*$count-$this->rate4)/($count-1),1);
		     	$e=round(($e*$count-$this->rate5)/($count-1),1);
		     	$count=$count-1;
	 		}
	 
				 $f=$a+$b+$c+$d+$e;
				 //$this->average=round($this->average/$count,1);
				 $f=round($f/$m,1);
				

			Yii::app()->db
			->createCommand("UPDATE tbl_school 
				SET rate1=:rate1,rate2=:rate2,rate3=:rate3,rate4=:rate4,rate5=:rate5,average=:average,count=:count 
				WHERE id=:id")
			->bindValues(
				array(':id'=>$key,':rate1'=>$a,':rate2'=>$b,':rate3'=>$c,':rate4'=>$d,':rate5'=>$e,':average'=>$f,':count'=>$count))
			->execute();
			return true;
	}

	protected function minusPointSchool($models,$key)
	{
			$list=$models[0]->attributes;
			$count=$list['count'];//get lay so rate tu truoc
			$a=$list['rate1'];$b=$list['rate2'];$c=$list['rate3'];
			$d=$list['rate4'];$e=$list['rate5'];
			$m=5;
			
			    
			    //$val=$colArr[$key];
			    
		     if (($count==1) or ($count==0))
		     {
		     	$a=$b=$c=$d=$e=0; $count=0;
		     }	else{


		     	$a=round(($a*$count-$this->rate1)/($count-1),1);
		     	$b=round(($b*$count-$this->rate2)/($count-1),1);
		     	$c=round(($c*$count-$this->rate3)/($count-1),1);
		     	$d=round(($d*$count-$this->rate4)/($count-1),1);
		     	$e=round(($e*$count-$this->rate5)/($count-1),1);
		     	$count=$count-1;
	 		}

				 
				 $f=$a+$b+$c+$d+$e;
				 //$this->average=round($this->average/$count,1);
				 $f=round($f/$m,1);
				

			Yii::app()->db
			->createCommand("UPDATE tbl_teacher 
				SET rate1=:rate1,rate2=:rate2,rate3=:rate3,rate4=:rate4,rate5=:rate5,average=:average,count=:count 
				WHERE id=:id")
			->bindValues(
				array(':id'=>$key,':rate1'=>$a,':rate2'=>$b,':rate3'=>$c,':rate4'=>$d,':rate5'=>$e,':average'=>$f,':count'=>$count))
			->execute();
	}

	protected function beforeDelete()
	{
		//ko co id teacher nhu o afterSave nen phai get lay
		$getID= PostsComments::model()->findAll(
			array("condition"=>"commentId=$this->id"));
		$li = CHtml::listData($getID,'postId','commentId');
		$key=key($li);
		
		$model2 = School::model()->findAll(
					 array("condition"=>"id =  $key",'select'=>'rate1,rate2,rate3,rate4,rate5,count',));
		if ($model2<>NULL)
		{
			self::minusPointTeacher($model2,$key);
		}


		$models = Teacher::model()->findAll(
					 array("condition"=>"id =  $key",'select'=>'rate1,rate2,rate3,rate4,rate5,count',));
		if ($models<>NULL)
		{
			self::minusPointSchool($models,$key);
		}

		
		return parent::beforeDelete();
	}

	//$this->key is PostID or TeacherID
	protected function afterDelete()
	{

		parent::afterDelete();
		// raise update comment event
		$this->module->onDeleteComment(
			$this/*,
			CActiveRecord::model($this->module->commentableModels[$this->type])->findByPk($this->key)*/
		);
	}

	/**
	 * @return string get comment users name
	 */
	public function getUserName()
	{
		return is_null($this->user) ? 'Guest' : $this->user->{$this->module->userNameAttribute};
	}

	/**
	 * @return string get comment users email
	 */
	public function getUserEmail()
	{
		return is_null($this->user) ? 'nobody@example.com' : $this->user->{$this->module->userEmailAttribute};
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'message' => 'Message',
			'userId' => 'User ID',
			'userName' => 'Name',
			'userEmail' => 'E-Mail',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('userId',$this->userId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}