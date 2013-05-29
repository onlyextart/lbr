<?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionTest()
    {
        echo ('test');
        exit;
    }
}
