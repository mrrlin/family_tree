<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Hierarchy extends Model
{
  public $id;
  public $name;
  public $years_of_life;
  public $photo;
  public $text;

  public function rules()
  {
      return [
          [['id', 'name'], 'required'],

          [['name', 'years_of_life', 'photo', 'text'], 'string'],
      ];
  }
}