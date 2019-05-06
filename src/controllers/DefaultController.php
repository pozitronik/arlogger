<?php
declare(strict_types = 1);

namespace pozitronik\arlogger\controllers;

use pozitronik\arlogger\models\ActiveRecordLogger;
use pozitronik\arlogger\models\ActiveRecordLoggerSearch;
use ReflectionException;
use Throwable;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\UnknownClassException;
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


	/**
	 * @param string $for
	 * @param int $id
	 * @return string
	 * @throws ReflectionException
	 * @throws Throwable
	 * @throws InvalidConfigException
	 * @throws UnknownClassException
	 */
	public function actionShow(string $for, int $id):string {
		$logger = new ActiveRecordLogger([
			'model' => $for
		]);

		return $this->render('timeline', [
			'timeline' => $logger->getHistory($id)
		]);
	}

}