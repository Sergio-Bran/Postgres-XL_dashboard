<?php include('include_constants.php'); ?>
<?php include('include_functions.php'); ?>
<?php
// Start and manage sessions
session_start();
// this will destroy your session and request you log in again if your inactivity is longer than 30 min
if(isset($_SESSION['userID'])){
  if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)){
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    // redirect person to logout page
    header("Location: logout.php?r=ina");
  }
}
// update your session activity... with each request
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

// # Here are some system db connections
$arrDBConns = array('Coordinator_1' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Coordinator'
                                 ,'DBIP' => '192.168.100.73'
                                 ,'DBPort' => 20004
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'Coordinator_2' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Coordinator'
                                 ,'DBIP' => '192.168.100.74'
                                 ,'DBPort' => 20005
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'Datanode_1' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Datanode'
                                 ,'DBIP' => '192.168.100.75'
                                 ,'DBPort' => 20008
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'Datanode_2' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Datanode'
                                 ,'DBIP' => '192.168.100.76'
                                 ,'DBPort' => 20009
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'Datanode_3' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Datanode_slave'
                                 ,'DBIP' => '192.168.100.77'
                                 ,'DBPort' => 20008
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'Datanode_4' => array('DBType' => 'Postgres'
                                 ,'DBVersion' => '10.1xl'
                                 ,'DBXLNode' => 'Datanode_slave'
                                 ,'DBIP' => '192.168.100.78'
                                 ,'DBPort' => 20009
                                 ,'DBName' => 'postgres'
                                 ,'DBUser' => 'legosnoc'
                                 ,'DBPass' => '54b!17/6@5ce0')
                  ,'GTM_proxy_01' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.73'
                                 ,'DBPort' => 20002)
                  ,'GTM_proxy_02' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.74'
                                 ,'DBPort' => 20002)
                  ,'GTM_proxy_03' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.75'
                                 ,'DBPort' => 20002)
                  ,'GTM_proxy_04' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.76'
                                 ,'DBPort' => 20002)
                  ,'GTM_proxy_05' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.77'
                                 ,'DBPort' => 20002)
                  ,'GTM_proxy_06' => array('DBXLNode' => 'GTM Proxy'
                                 ,'DBIP' => '192.168.100.78'
                                 ,'DBPort' => 20002)
                  ,'GTM_1' => array('DBXLNode' => 'GTM'
                                 ,'DBIP' => '192.168.100.71'
                                 ,'DBPort' => 20001)
                  ,'GTM_2' => array('DBXLNode' => 'GTM'
                                 ,'DBIP' => '192.168.100.72'
                                 ,'DBPort' => 20001));

?>
