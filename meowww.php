<?php  
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!emptyempty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!emptyempty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();
$logFile = 'log.txt';
$log = file_get_contents($logFile);
$log .= "User Real IP Address - ".$ip."\n";
file_put_contents($log);
?>

