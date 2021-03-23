<?php

namespace app\controllers;

use Yii;
use app\models\Hierarchy;
use yii\web\Controller;
use GuzzleHttp\Client;
use yii\base\Response;
use yii\base\Model;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    public function actionIndex() {
        $models = $this->Getinfo();
        $this->layout = 'main';
        return $this->render('index', [
            'models' => $models
        ]);
    }
    public function actionError() {
        $statusCode = 500;
        if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
            $exception = new NotFoundHttpException(Yii::t('yii', 'Page not found.'));
        }
        if ($exception instanceof HttpException) {
            $statusCode = $exception->statusCode;
        }
        return $this->render('error', [
            'statusCode' => $statusCode
        ]);
    }
    private function Getinfo() {
        $client = new Client([
            'base_uri' => 'https://land.lib33.ru/api/v2/contents/search?_projects[id]=23',
        ]);
        $response = $client->request('GET');
        $body = $response->getBody();
        $items = json_decode($body, true);
        for($i = 0; $i < count($items); $i++) {
            $models[] = new Hierarchy();
            Model::loadMultiple($models, $items, "");
        }
        return $models;
    }
}