<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta content="IE=11.0000" http-equiv="X-UA-Compatible">
<meta name="renderer" content="webkit">
<meta name="renderer" content="moz">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="screen-orientation"content="portrait">
<meta name="x5-orientation"content="portrait">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>我要送餐</title>
<link type="text/css" rel="stylesheet" href="{{asset('css/css.css')}}" madia="all">
</head>

<body>
<div class="index">
	<input type="button" value="我要送餐" class="index_button" style=" background:#999;border:1px solid #ccc;">
    <a href="{{url('/user/get/money')}}"><input type="button" value="领取酬劳" class="index_button signs"></a>
    <a href="{{url('/user/info')}}"><input type="button" value="我的" class="index_button signs"></a>
    <a href="javascript:history.back(-1)"><input type="button" value="退出" class="sing_bu"></a>
</div>
</body>
</html>
