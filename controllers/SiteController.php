<?php

namespace app\controllers;

use Yii;
use yii\rest\Controller;

/**
 * Class SiteController
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        return 'api';
    }
}