<?php

class Model {
public function getlogin()
{
// here goes some hardcoded values to simulate the database
if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
return 'login';
}
                        else{
return 'invalid user';
}
}
}
}
?>