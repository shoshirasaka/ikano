<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <title>以下の日程でご都合いかがでしょうかメーカー</title>
<meta name="description" content="日程提案を簡単に出力できるメーカーです。" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1,user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><meta name="msapplication-TileColor" content="#2d88ef">
<meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="36x36" href="favicons/android-chrome-36x36.png">
<link rel="icon" type="image/png" sizes="48x48" href="favicons/android-chrome-48x48.png">
<link rel="icon" type="image/png" sizes="72x72" href="favicons/android-chrome-72x72.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons/android-chrome-96x96.png">
<link rel="icon" type="image/png" sizes="128x128" href="favicons/android-chrome-128x128.png">
<link rel="icon" type="image/png" sizes="144x144" href="favicons/android-chrome-144x144.png">
<link rel="icon" type="image/png" sizes="152x152" href="favicons/android-chrome-152x152.png">
<link rel="icon" type="image/png" sizes="192x192" href="favicons/android-chrome-192x192.png">
<link rel="icon" type="image/png" sizes="256x256" href="favicons/android-chrome-256x256.png">
<link rel="icon" type="image/png" sizes="384x384" href="favicons/android-chrome-384x384.png">
<link rel="icon" type="image/png" sizes="512x512" href="favicons/android-chrome-512x512.png">
<link rel="icon" type="image/png" sizes="36x36" href="favicons/icon-36x36.png">
<link rel="icon" type="image/png" sizes="48x48" href="favicons/icon-48x48.png">
<link rel="icon" type="image/png" sizes="72x72" href="favicons/icon-72x72.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons/icon-96x96.png">
<link rel="icon" type="image/png" sizes="128x128" href="favicons/icon-128x128.png">
<link rel="icon" type="image/png" sizes="144x144" href="favicons/icon-144x144.png">
<link rel="icon" type="image/png" sizes="152x152" href="favicons/icon-152x152.png">
<link rel="icon" type="image/png" sizes="160x160" href="favicons/icon-160x160.png">
<link rel="icon" type="image/png" sizes="192x192" href="favicons/icon-192x192.png">
<link rel="icon" type="image/png" sizes="196x196" href="favicons/icon-196x196.png">
<link rel="icon" type="image/png" sizes="256x256" href="favicons/icon-256x256.png">
<link rel="icon" type="image/png" sizes="384x384" href="favicons/icon-384x384.png">
<link rel="icon" type="image/png" sizes="512x512" href="favicons/icon-512x512.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/icon-16x16.png">
<link rel="icon" type="image/png" sizes="24x24" href="favicons/icon-24x24.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/icon-32x32.png">
<link rel="manifest" href="/manifest.json">
<link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/ >
<link rel="stylesheet" type="text/css" href="sp.css"/ >
  
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
<script src="jquery.datetimepicker.js"></script> 
</head>
<body> 
<div id="h1box">
<h1>以下の日程でご都合いかがでしょうかメーカー</h1></div>
<input id="datetimepicker" type="text" >
<div class="textarea_box">
<textarea id="result">以下の日程でご都合いかがでしょうか。</textarea>
  
    <button class="btn copy_btn" data-clipboard-target="#result">COPY<span class="tooltip"><span class="text">Copied!</span></span></button>
    <button class="btn reset_btn">RESET</button>
</div>
  
 
<script> 
$(function () {
  var urlSearch = location.search;
  urlSearch = urlSearch.slice(1);
  urlSearch = decodeURI(urlSearch);
  //console.log(urlSearch);  
  if(urlSearch){
    $("#result").val(urlSearch);
    $("h1").html(urlSearch + "メーカー");
  }
  

var onSelectTimeFlag;

  $('#datetimepicker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d.m.Y',
	defaultTime:'10:00',
  inline: true,
  step:30,
  lang: 'ja',
	timepickerScrollbar:false,
  onSelectDate:function(dateText){
    var now_result = $("#result").val();
    $("#result").val(now_result + "\n" + dateText.dateFormat('n月j日'));
    var WeekChars = [ "（日）", "（月）", "（火）", "（水）", "（木）", "（金）", "（土）" ];
    var wDay = dateText.getDay();
    var now_result = $("#result").val();
    $("#result").val(now_result + WeekChars[wDay]);
      onSelectTimeFlag = false;
  },
  onSelectTime:function(dateText){
    var now_result = $("#result").val();
    if(onSelectTimeFlag){
      $("#result").val(now_result + dateText.dateFormat('H:i'));
      onSelectTimeFlag = false;
    }else{
      $("#result").val(now_result + dateText.dateFormat('H:i〜'));
      onSelectTimeFlag = true;
    }
  },
});
  
$('.copy_btn').click(function() {
    var copyText = document.querySelector('#result');
    var range = document.createRange();
    range.selectNode(copyText);
    getSelection().removeAllRanges();
    getSelection().addRange(range);
    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copy command was ' + msg);
        //alert('コピーしました');
        $(this).addClass("clicked");
    } catch(err) {
        console.log('Oops, unable to copy');
    }
    // 選択状態を解除する  
    window.getSelection().removeAllRanges();
});
  
  
$('.reset_btn').click(function() {
    $("#result").val("以下の日程でご都合いかがでしょうか。");
    });
});
</script>
  
<iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=shirasaka%40pizzdesign.com&amp;color=%23B1440E&amp;ctz=Asia%2FTokyo" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>

<footer>© <?php date("Y");?> <a href="https://twitter.com/shoshirasaka/status/1093343767417958400" target="_blank">SHO SHIRASAKA</a>. </footer>  
</body>
</html>
