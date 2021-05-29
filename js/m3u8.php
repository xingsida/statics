<?php 
$url=$_GET["url"];
$urls=explode("/",$url);
$rurl=$urls[4];
?> 
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta name="referrer" content="never" />
  <meta http-equiv="content-security-policy" />
          <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0 ,maximum-scale=1.0, user-scalable=no"><!-- 手机H5兼容模式 -->
  <meta charset="UTF-8" />
  <style type="text/css">html,body{padding: 0;margin: 0;height: 100%;overflow:hidden;  }#dplayer{height: 100%;z-index: 0;}</style>
  <title>视频&middot;播放器</title>
 </head>
 <body>
  <script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
 <script src="https://cdn.staticfile.org/pako/1.0.6/pako.min.js"></script>
  <script src="https://player.90mm.me/dplayer.min.js"></script>
  <link class="dplayer-css" rel="stylesheet" href="https://player.90mm.me/dplayer.min.css" />
  <script src="https://xiuaiquan.com/3yjw/js/hls.js"></script>
  <div id="output"></div>
  <div id="dplayer" style="background-color:black;"></div>
  <script type="text/javascript">var id = "<?php echo $rurl;?>"; var mdxsign = "Lw==";</script>
  <script src="https://xiuaiquan.com/3yjw/js/jQuery.min.js"></script>  
 </body>
</html>