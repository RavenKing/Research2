<?php
//print_r($people);
$i=1;
foreach($people as $result)
{
?>
 <div class="roundcont">
					<div class="roundtop" >
					<?php echo $this->Html->image('../images/tl.gif');?>
					</div>
				  <table>
					<tbody>
							<tr>
								<td valign="top" style="padding:0 10px 0 10px">
					<?php echo $i;?>
								
									</a>
								</td>
								<td>
									<strong>
									 <?php echo $result['Applytable']['name'];?>
									</strong>
									<a id="1" name="1"></a>
									<br><?php echo $result['Applytable']['tel']?><br>
									<br><?php echo $result['Applytable']['email']?><br>
									文档名：<br><?php echo $result['Applytable']['src']?><br>
									<a href="http://localhost/research2/files/apply/"<?php echo $result['Applytable']['src']; ?>>下载文档</a>
								</td>
							</tr>
					</tbody>
				  </table>
					<div class="roundbottom">
					<?php echo $this->Html->image('../images/bl.gif');?>
					</div>
					</div>
<?php
$i++;}
?>