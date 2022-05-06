<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<ol>
  <li>&lt;?php</li>
  <li>$str=file_get_contents('http://cn.bing.com/HPImageArchive.aspx?format=js&amp;idx=0&amp;n=1');</li>
  <li>if (preg_match("/\/(.+?).jpg/", $str, $matches)) {</li>
  <li>$imgurl='http://s.cn.bing.net'.$matches[0];</li>
  <li>}</li>
  <li>if ($imgurl) {</li>
  <li>header('Content-Type: image/JPEG');</li>
  <li>@ob_end_clean();</li>
  <li>@readfile($imgurl);</li>
  <li>@flush();</li>
  <li>@ob_flush();</li>
  <li>exit();</li>
  <li>} else {</li>
  <li>exit('error');</li>
  <li>}</li>
  <li>?&gt;</li>
</ol>
</body>
</html>