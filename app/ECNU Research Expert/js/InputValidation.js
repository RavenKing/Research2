//输入长度只能是50个字符
function test()
{
if(document.a.b.value.length>50)
{
alert("不能超过50个字符！");
document.a.b.focus();
return false;
}
}

//只能是英文
function onlyEng()
{
if(!(event.keyCode>=65&&event.keyCode<=90))
event.returnvalue=false;
}

//只能是数字
function onlyNum()
{
    if(!((event.keyCode>=48&&event.keyCode<=57)||(event.keyCode>=96&&event.keyCode<=105)))
    //考虑小键盘上的数字键
    event.returnvalue=false;
}

