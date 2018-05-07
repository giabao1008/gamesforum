<?php
namespace backend\views\widgets;

use Yii;
use yii\base\Widget;

class SidebarWiget extends Widget
{
    public function run()
    {
        return $this->render('sidebar');
    }
}