<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
$.ajax({
    url:'http://wx.phpty.cn/books.html',
    type:'get',
    dateType:'jsonp',
    data:{
            count:30
    },
    jsonp:'callback',
    success:function(data){
        $.each(data,function(i,v)){
            tr="<tr>"+
                    "<td>"+v.Id+"</td>"+
                    "<td>"+v.Title+"</td>"+
                    "<td>"+v.UnitPrice+"</td>"+
                    "<td>"+v.Content+"</td>"+
})
</body>
</html>