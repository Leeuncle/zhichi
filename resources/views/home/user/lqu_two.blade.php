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
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="{{asset('css/css.css')}}" madia="all">
</head>

<body>
<div class="index">
	<input type="button" value="领取酬劳" class="index_button" style=" background:#999;border:1px solid #ccc;">

    <div class="my_two">
    @foreach($order_list as $order)
    	<p><?php echo date('Y-m-d H:i',$order->over_time);?> 手机号：{{$order->order_phone}} 编码：{{$order->order_sn}}</p>
    @endforeach
       <!--  <p>‘月’日 手机号：...编码：....</p>
        <p>‘月’日 手机号：...编码：....</p>
        <p>‘月’日 手机号：...编码：....</p>
        <p>‘月’日 手机号：...编码：....</p> -->
    </div>
    <div class="resiger">
    	<p>我们已为您带来累计{{$user_info->order_momey}}元的兼职收入</p>
        <p></p>
    </div>
    <a href="javascript:history.back(-1)"><input type="button" value="返回上级" class="sing_bu"></a>
</div>
</body>
</html>
