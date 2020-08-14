<?php

require('../controller/TestController.php');

function getArgumentStart($uri) {
    foreach($uri as $key => $value) {
        if($value == 'index.php') {
            if($key == count($uri) - 1) return -1;
            return $key+1;
        }
    }
}

function main() {
    $uri = parse_url($_SERVER['REQUEST_URI']);

    $parameters = explode('/', $uri['path']);

    $start = getArgumentStart($parameters);
        
    if($start != -1) {
        $controller_name = $parameters[$start];
        $function_name = $parameters[$start+1] . '_' . strtolower($_SERVER['REQUEST_METHOD']);
        $args = array();
        $start += 2;
        for(;$start < count ($parameters); $start++) {
            $args[] = $parameters[$start];
        }
        call_user_func_array(array(new $controller_name, $function_name), $args);
    } else {
        echo "404 not found";
    }    
}

main();

?>