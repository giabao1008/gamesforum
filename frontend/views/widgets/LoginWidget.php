<?php
namespace frontend\views\widgets;

use Yii;
use yii\base\Widget;

class LoginWidget extends Widget
{
    public function run()
    {
        return $this->render('login');
    }
}