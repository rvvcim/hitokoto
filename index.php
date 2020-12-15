<?php
//获取句子文件的绝对路径
$path = dirname(__FILE__);
$file = file($path."/hitokoto.php");
 
//随机读取一行
$arr  = mt_rand(2, count( $file ) -2);
$content  = trim($file[$arr]);
//编码判断，用于输出相应的响应头部编码
if (isset($_GET['charset']) && !empty($_GET['charset'])) {
    $charset = $_GET['charset'];
    if (strcasecmp($charset,"gbk") == 0 ) {
        $content = mb_convert_encoding($content,'gbk', 'utf-8');
    }
} else {
    $charset = 'utf-8';
}

//判断请求，并输出内容
header("Content-Type: text/json; charset=$charset"); 
if (isset($_GET['encode']) === 'js') {
	echo "function hitokoto(){document.write(".$content.")";
} elseif (isset($_GET['encode']) === 'json') {
	echo '{"data":{"content":{"id":'. $arr. ',"hitokoto":"'. $content . '"}},"status":"数据获取成功！"}';
} else {
	echo $content;
}
