<h1>
�ҷ����ı�����</h1>
<?php 
$matches=$this->requestAction(array('controller'=>'matches','action'=>'getmatches'),array('pass'=>array($_SESSION['Auth']['User']['id'])));
//print_r($matches);
foreach($matches as $result)
{
?>
<h3><?php echo $result['Match']['name'];?>:<span>Ŀǰ������:
<?php
$option=$this->requestAction(array('controller'=>'applytables','action'=>'getcount'),array('pass'=>array($result['Match']['id'])));
echo $option;
?></span></h3>
<h4><?php
echo $this->Html->link("�鿴������",array('controller'=>'applytables','action'=>'listpeople',$result['Match']['id']));
?></h4>
<div id="dottedline1"></div>
<?php
}
?>