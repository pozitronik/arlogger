<?php
declare(strict_types = 1);

namespace pozitronik\arlogger\controllers;

use pozitronik\arlogger\models\ActiveRecordLoggerSearch;
use Throwable;
use Yii;
use yii\web\Controller;

/**
 * Class HistoryController
 * @package app\controllers
 */
class DefaultController extends Controller {

	/**
	 * @return string
	 * @throws Throwable
	 */
	public function actionIndex():string {
		$params = Yii::$app->request->queryParams;
		$searchModel = new ActiveRecordLoggerSearch();


		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $searchModel->search($params)
		]);

	}

}