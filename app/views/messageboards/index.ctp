<?php //printh_r($messageboards);?>
			</div>
		
<br>
<br>
<?php
  foreach($messageboards as $result)
  {
?> 
<div class="roundcont">
<div class="roundtop">

<img alt="" src="/research2/img/../images/tl.gif">
</div>
<table>
<tbody>
<tr>
<td valign="top" style="padding:0 10px 0 10px">
</td>
<td>
<strong>
<?php echo $result['Messageboard']['username'];?>
<span style="float:right;padding-left:10px"><?php echo $result['Messageboard']['created'];?></span>
</strong>
<a id="1" name="1"></a>
<br>
<?php echo $result['Messageboard']['text'];?>
</td>
</tr>
</tbody>
</table>
<div class="roundbottom">
<img alt="" src="/research2/img/../images/bl.gif">
</div>
</div>
<?php
}?>   


<div class="messageboards form">
<form id="MessageboardAddForm" accept-charset="utf-8" action="/research2/messageboards/add" method="post">

<fieldset>
<legend>Add Messageboard</legend>
<div class="input text">
<label for="MessageboardUsername">Username</label>
<input id="MessageboardUsername" type="text" maxlength="50" name="data[Messageboard][username]">
</div>
<div class="input textarea">
<label for="MessageboardText">Text</label>
<textarea id="MessageboardText" rows="6" cols="30" name="data[Messageboard][text]"></textarea>
</div>
</fieldset>
<div class="submit">
<input type="submit" value="Submit">
</div>
</form>
</div>






</div>

    <div class="sidebar">
    <h2>意见问题可以提出来哦</h2>    
   <h3>欢迎留言</h3>	
     
		</div>