<!DOCTYPE html><html><head><meta charset="UTF-8">
<title>播放</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
 
<link href="css/BcvPly.css" rel="stylesheet" />
<link href="css/BcvPly_custom.css" rel="stylesheet" />
<link href="css/BcvPly_icon.css" rel="stylesheet" />
<link href="css/font-awesome.min.css" rel="stylesheet" />

</head><body>


<style>
#T5xPlayerBlock {
    width: 640px;
    height: 360px;
    margin: 20;
    position: relative;
}
.BcvPly {
    width: 100%;
    height: 100%;
}
</style>



<div id="dfp"></div>

<button id="play">play</button>
<button id="get">get</button>

<div id="T5xPlayerBlock">

    <video id="SETPly" class="LxChmiz_BcvPly video-js"
        data-account="4338955585001"
        data-video-id="ref:459e9680ce1a815d92b430ac7aad0c2c0012a7f00a1efdc4ad94db47a0f4f1e0"
        data-player="VJxyQW4m0e"
        data-embed="default">
    </video>
    

</div>


<script src="//players.brightcove.net/4338955585001/VJxyQW4m0e_default/index.min.js"></script>

<script type='text/javascript'>
  var vjs = videojs('SETPly');
  document.getElementById('play').onclick = function(){
    vjs.play();
  };
  document.getElementById('get').onclick = function(){
    //alert( 'seekable_start: ' + vjs.buffered().start(0) + '\nseekable_end:' + vjs.buffered().end(0) + '\nduration:' + vjs.duration() );
    alert( 'buffered_start: ' + vjs.buffered().start(0) + '\nbuffered_end: ' + vjs.buffered().end(0));
  };
</script>
</body></html>