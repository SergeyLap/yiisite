<?php
class TestController extends Controller{
    function actionPhpinfo(){
       if($_GET['modules'] == 1) 
           {   
            $info=get_loaded_extensions();
            }
         else {
            $info=  phpversion();    
             }
        $this->render('phpinfo',array('info'=>$info));
      }
        
        
    
    
}

?>
