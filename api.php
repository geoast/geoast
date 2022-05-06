<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<pre>&lt;?php  //从bing获取数据  $str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?idx=0&amp;n=1');    if (preg_match("/&lt;url&gt;(.+?)&lt;/url&gt;/ies", $str, $matches)) {      //正则匹配抓取图片url      $imgurl = 'https://cn.bing.com' . $matches[1];  } else {      //使用默认的图像      $imgurl = 'https: //picsum.photos/1920/1080/?random';  }  header("Location: $imgurl");  ?&gt;</pre>
</body>
</html>