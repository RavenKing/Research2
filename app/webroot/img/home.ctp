<h1>
我发布的比赛：</h1>
<?php 
$matches=$this->requestAction(array('controller'=>'matches','action'=>'getmatches'),array('pass'=>array($_SESSION['Auth']['User']['id'])));
//print_r($matches);
foreach($matches as $result)
{
?>
<h3><?php echo $result['Match']['name'];?>:<span>目前报名者:
<?php
$option=$this->requestAction(array('controller'=>'applytables','action'=>'getcount'),array('pass'=>array($result['Match']['id'])));
echo $option;
?></span></h3>
<h4><?php
echo $this->Html->link("查看报名者",array('controller'=>'applytables','action'=>'listpeople',$result['Match']['id']));
?></h4>
<div id="dottedline1"></div>
<?php
}
?>