
<div id=mask style=display:none > </div>
<div id='languageform' style='display:none'>
<div style="padding: 90px 0 50 20px;">
<h2> Choose your language</h2>
<form id="language" accept-charset="utf-8" action="/research2/users/main " method="post">
<div class='lancheck'>
<button type='submit' value="cn" name='language'>中文</button>
<button type='submit' value="eng" name='language'>English</button>
<button type='submit' value="cn" name='language'>德文</button>
<button type='submit' value="cn" name='language'>日文</button>
</div>
<?php echo $this->Html->image('../images/sub_blue_delete.png',array('alt'=>'delete','onclick'=>'close2()'));?>
</form>
</div>
</div>
<script>
function close2(){
 document.getElementById('languageform').style.display='none';
document.getElementById('mask').style.display='none';
}
function checkl()
{
document.getElementById('mask').style.height=document.body.clientHeight + 'px';
document.getElementById('mask').style.width=document.body.clientWidth + 'px';
document.getElementById('mask').style.display='block';
//设置模糊层的宽和高，并让它显示出来，需要在后面加上 'px'，否则Firefox浏览器会出错
document.getElementById('languageform').style.top='10px';
 document.getElementById('languageform').style.left=(document.body.clientWidth -600)/2 + 'px';
document.getElementById('languageform').style.display='block';
}


</script>