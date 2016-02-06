<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx6ee0627d5fce0767", "190344886b7bf51725687ea08f20bd9b ");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="万马谷控股集团">
        <title>拜年啦！</title>
         <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body style="background-color: #000;">
       

<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
               请输入您的名称
            </h4>
         </div>
         <div class="modal-body">
            <div class="form-group">
                <div class="alert alert-warning hidden" role="alert">名称不能为空</div>
                <label for="recipient-name" class="control-label">名称:</label>
                <input type="text" class="form-control required" id="recipient-name" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">
              </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" onclick="check()">
               提交
            </button>
         </div>
      </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
        <!--[if lt IE 10]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <body style="margin:0;padding:0;">
            <div id="Stage" class="EDGE-280747677">
            </div>
            <?php require_once 'cs.php';echo '<img src="'._cnzzTrackPageView(1256275915).'" width="0" height="0"/>';?>
        </body>

        <!-- build:js scripts/main.js -->
        <script type="text/javascript" charset="utf-8" src="http://animate.adobe.com/runtime/6.0.0/edge.6.0.0.min.js"></script>
        <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<!--        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>-->
        <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
        <script src="scripts/browserSwipe.js"></script>
        <script src="scripts/touchswipe.js"></script>
        <script src="scripts/main.js"></script>
        <!-- endbuild -->
        <script>
            var screen,xname;
            $(document).ready(function(){
                app();
                xname = QueryString("xname");
                if(xname){
                    xname=xname.replaceAll("_","%");
                    xname=xname.replaceAll("%21","%");
                    xname=unescape(xname);
                }else{
                    xname = "万马欧韩服装城，祝大家";
                }
                window.shareData = {  
                    "imgUrl": "http://www.wanmagu.com/html5/images/tubiao.png", 
                    "sendFriendLink": window.location.href,
                    "tTitle": "拜年啦！",
                    "tContent": xname+"猴年吉祥！身体健康！合家幸福！",
                };
                 AdobeEdge.loadComposition('bainian', 'EDGE-280747677', {
                    scaleToFit: "both",
                    centerStage: "horizontal",
                    minW: "0px",
                    maxW: "undefined",
                    width: "640px",
                    height: "1100px"
                }, {"dom":{}}, {"dom":{}});
            });
           wx.config({
              debug: false,
              appId: '<?php echo $signPackage["appId"];?>',
              timestamp: <?php echo $signPackage["timestamp"];?>,
              nonceStr: '<?php echo $signPackage["nonceStr"];?>',
              signature: '<?php echo $signPackage["signature"];?>',
              jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                'onMenuShareQQ',
                'onMenuShareWeibo',
                'openLocation',
                'getLocation',
                'addCard',
                'chooseCard',
                'openCard',
                'hideMenuItems',
                'previewImage',
                "startRecord", 
                "stopRecord", 
                "onVoiceRecordEnd", 
                "playVoice", 
                "pauseVoice",
                "stopVoice", 
                "onVoicePlayEnd", 
                "uploadVoice", 
                "downloadVoice"
              ]
            });
            wx.ready(function () {
              // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
                wx.onMenuShareAppMessage({
                    title: window.shareData.tTitle,
                    desc: window.shareData.tContent,
                    link: window.shareData.sendFriendLink,
                    imgUrl: window.shareData.imgUrl,
                    type: '', // 分享类型,music、video或link，不填默认为link
                    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                    success: function () { 
                    },
                    cancel: function () { 
                        //alert('分享朋友失败');
                    }
                });


              // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
                wx.onMenuShareTimeline({
                    title: window.shareData.tContent,
                    link: window.shareData.sendFriendLink,
                    imgUrl: window.shareData.imgUrl,
                    success: function () { 
                        //alert('分享朋友圈成功');
                    },
                    cancel: function () { 
                        //alert('分享朋友圈失败');
                    }
                });	

              // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
                wx.onMenuShareWeibo({
                    title: window.shareData.tTitle,
                    desc: window.shareData.tContent,
                    link: window.shareData.sendFriendLink,
                    imgUrl: window.shareData.imgUrl,
                    success: function () { 
                        //alert('分享微博成功');
                    },
                    cancel: function () { 
                        //alert('分享微博失败');
                    }
                });
                if(window.shareData.timeline_hide == '1'){
                    wx.hideMenuItems({
                      menuList: [
                        'menuItem:share:timeline', //隐藏分享到朋友圈
                      ],
                    });
                }
                wx.error(function (res) {
                    if(res.errMsg){
                        wx.hideOptionMenu();
                    }
                });
            });
        </script>
</body>
</html>
