<?php
class Core {
    
    public function run() {
        //echo "URL: ".$_GET['url'];
        $url='/';
        $params = array();
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }
        //echo 'URL: '.$url;
        if(!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);
            
            $currentController = $url[0].'Controller';
            array_shift($url);
            
            if(isset($url[0]) && !empty($url[0] != '/')){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }
            if(count($url) > 0){
                $params = $url;
            }         
                 
            
            
        }else{
            $currentController = 'homeController';
            $currentAction = 'index';            
        }
        
        $c = new $currentController();    
        call_user_func_array(array($c, $currentAction), $params);
        
        
        
        
        
        /*echo '<hr/>';
        echo "CONTROLLER: ".$currentController."<br/>";
        echo "ACTION: ".$currentAction."<br/>";
        echo "PARAMS: ".print_r($params, true)."<br/>";  */
    }
    
}