<?php
require(dirname(__FILE__) . '/includes/init.php');
$agentuid=$_SESSION['agentuid'];
$smarty->assign('agentuid',$agentuid);
$smarty->display("right.html");	