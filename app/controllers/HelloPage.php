<?php
/**
 * Created by PhpStorm.
 * User: tcasolari
 * Date: 11/15/14
 * Time: 8:40 PM
 */

class HelloPage extends BaseController
{
    protected $content = 'Hello World';

    function index()
    {
        return View::make('helloWorld', ['content' => $this->content]);
    }
}