<?php

$categories_arr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$js_categories_Str = "";
foreach($categories_arr as $key => $value)
{
	$js_categories_Str .= "'".$value."',";
	$data[1].= (rand()%10+4)."," ;
}

$js_categories_Str  = substr($js_categories_Str,0,-1);
$data[1]  = substr($data[1],0,-1);
?>



<!DOCTYPE html>
<html prefix='og: http://ogp.me/ns#'>
<head>
<meta charset="UTF-8">
<script  type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/modules/data.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/modules/drilldown.js"></script>
<title>排名分析</title>
<meta property="og:url"           content="http://203.64.84.89/php_test/picture_test.php" />
<meta property="og:type"          content="website"/>
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="http://a2.att.hudong.com/03/48/19300001355025133128487582748.jpg" />
<meta property="og:description" content="分析比較的結果!"></meta>
<meta property="og:site_name" content="跑跑跑跑"></meta>


<script>

 $(function () {
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: [<?=$js_categories_Str?>]
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [<?=$data[1]?>]
        }]
    });
});
</script>
<script>

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '141874829567662',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.7&appId=141874829567662";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<div class="fb-share-button" 
data-href="http://203.64.84.89/php_test/picture_test.php" 
data-layout="button" 
data-size="small" 
data-mobile-iframe="true">
<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F203.64.84.89%2Fphp_test%2Fpicture_test.php&amp;src=sdkpreparse">分享</a></div>
<div class="fb-send"
 expr:data-href='data:post.canonicalUrl'></div>
</body>
</html>