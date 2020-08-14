<?php
require_once(__DIR__ . '/../core/CJ_Controller.php');
require_once(__DIR__ . '/../model/TestModel.php');

class TestController extends CJ_Controller {
    function __construct() {
        echo 'CONTROLLER CREATED ' . '<br />';
        $this->test_model = new TestModel();
    }

    function hello_get(...$args) {
        $this->test_model->sayHello('CJ_MODEL');
        echo 'Hello World GET!';
    }

    function hello_post(...$args) {
        echo 'Hello World POST!';
    }

    function test_get(...$args) {
        echo implode('|', $args);
        $this->load_view('home', array('content' => '<h1>This content is sent from controller </h1>' ));
    }

}

?>