<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>智慧跑道系統</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"><!--匯入bootstrap-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><!--匯入jQuery-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script><!--匯入bootstrap javascript-->

<script  type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/modules/data.js"></script>
<script  type="text/javascript" src="https://code.highcharts.com/modules/drilldown.js"></script>

<script>
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '個人月累積排名'
        },
        subtitle: {
            text: 'Click the columns to view versions. Source: <a href="http://netmarketshare.com">netmarketshare.com</a>.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total percent market share'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33,
                drilldown: 'Microsoft Internet Explorer'
            }, {
                name: 'Chrome',
                y: 24.03,
                drilldown: 'Chrome'
            }, {
                name: 'Firefox',
                y: 10.38,
                drilldown: 'Firefox'
            }, {
                name: 'Safari',
                y: 4.77,
                drilldown: 'Safari'
            }, {
                name: 'Opera',
                y: 0.91,
                drilldown: 'Opera'
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                drilldown: null
            }]
        }],
        drilldown: {
            series: [{
                name: 'Microsoft Internet Explorer',
                id: 'Microsoft Internet Explorer',
                data: [
                    [
                        'v11.0',
                        24.13
                    ],
                    [
                        'v8.0',
                        17.2
                    ],
                    [
                        'v9.0',
                        8.11
                    ],
                    [
                        'v10.0',
                        5.33
                    ],
                    [
                        'v6.0',
                        1.06
                    ],
                    [
                        'v7.0',
                        0.5
                    ]
                ]
            }, {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v40.0',
                        5
                    ],
                    [
                        'v41.0',
                        4.32
                    ],
                    [
                        'v42.0',
                        3.68
                    ],
                    [
                        'v39.0',
                        2.96
                    ],
                    [
                        'v36.0',
                        2.53
                    ],
                    [
                        'v43.0',
                        1.45
                    ],
                    [
                        'v31.0',
                        1.24
                    ],
                    [
                        'v35.0',
                        0.85
                    ],
                    [
                        'v38.0',
                        0.6
                    ],
                    [
                        'v32.0',
                        0.55
                    ],
                    [
                        'v37.0',
                        0.38
                    ],
                    [
                        'v33.0',
                        0.19
                    ],
                    [
                        'v34.0',
                        0.14
                    ],
                    [
                        'v30.0',
                        0.14
                    ]
                ]
            }, {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v35',
                        2.76
                    ],
                    [
                        'v36',
                        2.32
                    ],
                    [
                        'v37',
                        2.31
                    ],
                    [
                        'v34',
                        1.27
                    ],
                    [
                        'v38',
                        1.02
                    ],
                    [
                        'v31',
                        0.33
                    ],
                    [
                        'v33',
                        0.22
                    ],
                    [
                        'v32',
                        0.15
                    ]
                ]
            }, {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v8.0',
                        2.56
                    ],
                    [
                        'v7.1',
                        0.77
                    ],
                    [
                        'v5.1',
                        0.42
                    ],
                    [
                        'v5.0',
                        0.3
                    ],
                    [
                        'v6.1',
                        0.29
                    ],
                    [
                        'v7.0',
                        0.26
                    ],
                    [
                        'v6.2',
                        0.17
                    ]
                ]
            }, {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v12.x',
                        0.34
                    ],
                    [
                        'v28',
                        0.24
                    ],
                    [
                        'v27',
                        0.17
                    ],
                    [
                        'v29',
                        0.16
                    ]
                ]
            }]
        }
    });
});
</script>

<style type="text/css">
	h1 {
		text-align:center;
		background:#555;
		color:white;
		}
		.title{
		text-align:right;
		color:skyblue;
		font-size:25px;
		}
		h2 {
		text-align:center;
		font-size:25px;
		}
		.title{
		text-align:right;
		color:skyblue;
		font-size:25px;
		}
	nav {
		text-align:center;
		float: left;
		max-width: 200px;
	}
	article{
    margin-left: 170px;
	margin-right:100px;
    padding: 1em;
    overflow: hidden;
}
.nav2{
	text-align:center;
	float: right;
	min-width:200px;
}
body {
	background-image : url(back6.png);
	background-repeat:no-repeat;
	background-color : rgba(0,0,0,1) ;
	background-size:cover;
}
</style>
</head>
<body>
<?php 
if(empty($_POST))
{$type=1;
}
else
{
    $db = new SQLite3('/var/www/html/exercise.db');//呼叫資料庫
    $temp="SELECT * From userdata WHERE SID='".$_POST['ID']."' AND birth='".$_POST['birthday']."'";
    $temp=$db->query($temp);
    $result=$temp->fetchArray();
        if($result)
        {$type=1;}
        else
        {$type=2;}
}
if($type==1)
{
if($_SESSION['views']==0)
{
	$_SESSION['school_name']=$_POST['school'];
	$_SESSION['SID']=$_POST['ID'];
}
$s="select CampusId FROM campus_detail WHERE CampusName='".$_SESSION['school_name']."'";//抓取學校編碼
$temp=$db->query($s);
$cid=$temp->fetchArray();
$_SESSION['CID']=$cid['CampusId'];

echo '
<header>
<br>
</p>
<ul class="nav nav-tabs">
<div class="navbar-header">
                <a class="navbar-brand" href="#">';
				echo $_SESSION['school_name'];
				echo '
				</a>
            </div>
        <li class="active" ><a href="#">Home</a></li>
        <li><a href="user_data.php"><span class="glyphicon glyphicon-log-in"></span> 使用者資訊查詢</a></li>
        <li><a href="sportdata_search_date.php"><span class="glyphicon glyphicon-search"></span> 運動紀錄查詢</a></li>
        <li class="dropdown"><a lass="dropdown-toggle" data-toggle="dropdown"  href="analyze_chat_choose.php"><span class="glyphicon glyphicon-align-justify"></span> 分析排名<span class="caret"></span></a>
				 <ul class="dropdown-menu">
				 <li><a href="#">心肺800M</a></li>
                <li><a href="#">心肺1600M</a></li>
                <li><a href="#">耐力3KM</a></li>
				 <li><a href="#">耐力5KM</a></li>
				  <li><a href="#">耐力10KM</a></li>
				   <li><a href="#">個人當月累積</a></li>
		</li>
    </ul></ul>
<p class="title">
<!--$_POST["ID"].-->
您好，
<a href="login_v2.php">登出</a></p>
</header>
<nav>
<ul class="list-group ">
　<li class="list-group-item list-group-item-action list-group-item-warning">當月累積排名
　<li class="list-group-item list-group-item-action list-group-item-warning">第一名 姓名 學校 里程數</li>
<li class="list-group-item list-group-item-action list-group-item-warning">第二名 姓名 學校 里程數
<li class="list-group-item list-group-item-action list-group-item-warning">第三名 姓名 學校 里程數 
</ul>
</nav>
<ul class="nav2">
<li class="list-group-item list-group-item-action list-group-item-warning">個人資料
<li class="list-group-item list-group-item-action list-group-item-warning">學號：102316230</li>
<li class="list-group-item list-group-item-action list-group-item-warning">姓名：
<li class="list-group-item list-group-item-action list-group-item-warning">班別：
<li class="list-group-item list-group-item-action list-group-item-warning">性別：
</ul>
<article>
<div id="container" style="max-width: 700x; height: 350px"></div>
</article>
<footer class="bg-info" style="text-align:center">Copyright 智慧跑道系統</footer>
<center>
</body>
</html>';
}
else if($type==2)
{
echo '<h1 align="center">登入錯誤!請重新登入!</h1> <a href="login_v2.php">回上一頁</a>';	
}
$db->close();
?>

