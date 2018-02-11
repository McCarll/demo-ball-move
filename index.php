<?php
global $left, $top;
session_start();
if(isset($_POST['SendToServer'])){
    $left = $_POST['left'];
    $top = $_POST['top'];
   SendToServer($top, $left);    
}
if(isset($_POST['CallBackClient'])){
    $left = $_POST['left'];
    $top = $_POST['top'];            
    CallBackClient($left, $top); 
}
if(isset($_POST['Start'])){           
    GetStartPosition(); 
}


function SendToServer($top, $left){
//    setcookie($left, $_POST['left']);
//    setcookie($top, $_POST['top']);
    $_SESSION['top'] = $top;
    $_SESSION['left'] = $left;
    $out = array('top'=> $_SESSION['top'], 'left'=> $_SESSION['left']);
    echo $outList = json_encode($out);
}

function CallbackClient ($left, $top){
    header('Content-type: application/json');
    $log_file="logs.log";
    $f=fopen($log_file,"a+");  
//    fputs($f, "CallBackClient: left: " +$left+ "; top: " +$top +"\r\n");
    fclose($f);
    $list = array('top'=> $$_SESSION['top'], 'left'=> $$_SESSION['left']);            
//    $list = array('top'=> 500, 'left'=> 500);            
    echo json_encode($list);
}
function GetStartPosition (){
    $out = array('top'=> $_SESSION['top'], 'left'=> $_SESSION['left']);
    echo json_encode($out);
}
?>
