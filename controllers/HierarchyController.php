<?php

namespace app\controllers;

use Yii;
use app\models\Hierarchy;
use yii\web\Controller;
use GuzzleHttp\Client;
use yii\base\Response;
use yii\base\Model;

class HierarchyController extends Controller
{
    public function actionDescendant($id) {
        $client = new Client([
            'base_uri' => 'https://land.lib33.ru/api/v2/contents/' . $id,
        ]);
        $response = $client->request('GET');
        //var_dump($response);
        //Yii::$app->response->format = Response::FORMAT_JSON;
        $body = $response->getBody();
        // echo $body;
        $item = json_decode($body, true);
        $model = new Hierarchy();
        $model->load($item, '');
        return $this->render('descendant', [
            'model' => $model,
        ]);
    }
    public function actionTree() {
        $client = new Client([
            'base_uri' => 'https://land.lib33.ru/api/v2/contents/search?_projects[id]=23',
        ]);
        $response = $client->request('GET');
        $body = $response->getBody();
        //echo $body;
        $items = json_decode($body, true);
        for($i = 0; $i < count($items); $i++) {
            $models[] = new Hierarchy();
            Model::loadMultiple($models, $items, "");
        }
        return $this->render('tree', [
           'models' => $models,
        ]);
    }
}