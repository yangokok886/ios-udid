<!--雪糕在线获取UDID1.3版本-->
<!--开源项目切勿倒卖，否则追究责任-->
<!--修改并修复布局，增加设备机型、系统版本、IMEI-->
<!--请自行修改udid.mobileconfig里URL链接和信息-->
<!--请自行修改receive.php最下方URL链接-->
<!--设备机型映射为device_models.php-->
<!--系统版本映射为ios_version_map.php-->
<!--最终修改时间为2024年8月29日 by雪糕-->
<!doctype html>
<php?
<html lang="en" translate="no">
 <head>
  <link rel="apple-touch-icon-precomposed" href="assets/ui/css/apple.ico">  
  <script src="assets/ui/js/clipboard.min.js"></script> 
  <link href="assets/ui/css/favicon.ico" rel="shortcut icon" type="image/x-icon"> 
  <link rel="icon" href="/assets/ui/images/icon.png" type="image/png">
  <title>获取设备UDID</title> 
  <meta name="keywords" content="udid,UDID,获取udid,获取UDID,UDID获取,udid获取,udids,UDIDS,屏蔽iOS更新,屏蔽更新,ios屏蔽更新"> 
  <meta name="description" content="专业获取iOS设备的UDID平台为设备提供免费的UDID获取功能，帮助用户最快的方式快速安装并查询UDID"> 
  <meta property="og:type" content="webpage"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style type="text/css">
    body {
    margin: 0;
    padding: 0;
    color: #333;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.6;
    background-color: #f7f9fb;
    margin-top: -10px; /* 负值可以将整个内容上移 */
}

    .container-fluid.wrapper {
    margin-top: -50px; /* 将整个容器上移 */
}

    #content {
    width: 95%;
    padding: 20px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 0px;
    align-items: center; /* 居中对齐 */
    gap: 10px; /* 设置输入框之间的间距 */
    }

    #header {
    background-color: #1aa79a;
    height: 100px;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    color: white;
    font-size: 36px;
    line-height: 100px;
    text-align: center;
    }

    input[type="text"] {
    font-size: 18px;
    width: 95%; /* 设置一个固定宽度 */
    padding: 10px;
    margin: 5px auto; /* 调整上下外边距以保持一致性 */
    display: block;
    text-align: center;
    align-items: center;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

    label {
    display: block;
    font-size: 16px; /* 标签字体大小 */
    margin: 0; /* 去除默认的外边距 */
    padding: 0; /* 去除默认的内边距 */
    position: relative;
    align-items: center; 
    top: 12px; /* 根据需要调整向下移动的距离 */
}

    .buttons {
    background: #000000;
    border: 1px solid #777;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    color: #fff;
    cursor: pointer;
    font-family: "Microsoft Yahei", Arial, Tahoma, sans-serif;
    font-size: 14px;
    font-weight: bold;
    padding: 6px 12px; /* 内边距 */
    margin: 10px auto; /* 外边距，增加按钮之间的距离 */
    text-decoration: none;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    white-space: nowrap;
    opacity: 1;
}

    .buttons i {
    margin-right: 8px;
    }

    .buttons:hover {
    background-color: #3b3d3d;
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    #footer {
    border-top: 1px solid #ddd;
    font-family: "Roboto Slab", "Helvetica Neue", Helvetica, "Hiragino Sans GB", Arial, sans-serif;
    margin-top: 50px;
    padding: 20px 0;
    text-align: center;
    color: #555;
    }

    h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    }

    .udid-intro {
    color: #8c9293;
    line-height: 24px;
    margin-bottom: 20px;
    }
  </style> 
  <meta charset="UTF-8"> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta property="og:type" content="webpage"> 
  <meta name="apple-mobile-web-app-capable" content="yes"> 
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> 
  <link rel="stylesheet" href="assets/ui/css/header_include_fashion.min.css"> 
  <script type="text/javascript" async src="assets/ui/js/linkid.js"></script> 
  <script type="text/javascript" async src="assets/ui/js/js"></script> 
  <script type="text/javascript" async src="assets/ui/js/analytics.js"></script> 
  <script type="text/javascript" async src="assets/ui/js/null_1498f62842624c57aa5f0ba9f33ee489.js"></script> 
  <script src="assets/ui/js/hm.js"></script> 
  <script async src="assets/ui/js/null_76df6f5bb7bd48a98e001d8fba7e2f37.js"></script>  
 </head> 
 <body class="tools-box">
    <div class="container-fluid" id="toolNav" style="background: #ecf1f3;"></div>
    <div class="container-fluid wrapper">
        <div class="container content inner-content" style="padding-bottom:40px;" style="padding-bottom:40px;">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
                    <div class="row text-center">
                        <div class="margin-bottom-40">
                            <div class="margin-bottom-10" style="padding-top: 10px;">
                            <br><br>
                            <h2 class="font-38 fw-800 color-333">获取设备UDID</h2>
                            <hr style="margin: 15px auto; width: 120px; height: 3px; border: none; background-color: black; border-radius: 10px;">
                        </div>
                    </div>
                    <div class="row text-center">
                        <div id="content">
                            <label for="showText">UDID:</label>
                            <input class="input-container" type="text" id="showText" placeholder="UDID" value="<?php echo $_GET['UDID'] ?? ''; ?>" readonly />
                            <label for="deviceModel">设备型号:</label>
                            <input class="input-container" type="text" id="showText1" placeholder="设备型号" value="<?php echo $_GET['DEVICE_MODEL'] ?? ''; ?>" readonly />
                            <label for="deviceVersion">系统版本:</label>
                            <input class="input-container" type="text" id="showText2" placeholder="系统版本" value="<?php echo $_GET['DEVICE_VERSION'] ?? ''; ?>" readonly />
                            <label for="imei">IMEI:</label>
                            <input class="input-container" type="text" id="showText3" placeholder="IMEI" value="<?php echo $_GET['IMEI'] ?? ''; ?>" readonly />
                            <br>
                            <a class="buttons" id="getUDIDButton" onclick="downloadSecondFile()"><i class="fas fa-download"></i>获取UDID</a>
                            <a class="buttons" id="copyButton" data-clipboard-target="#showText"><i class="fas fa-copy"></i>复制UDID</a>
                            <a class="buttons" id="copyAllButton"><i class="fas fa-copy"></i>复制全部</a>
<br>
<br>
<textarea id="copyTextArea" style="position: absolute; left: -9999px;"></textarea>
<script>
        // 修改后的点击复制功能，不提示没有内容的情况
function setupAutoCopy(inputId) {
    var inputElement = document.getElementById(inputId);

    inputElement.addEventListener('click', function() {
        if (inputElement.value) { // 只有在有内容时才复制
            navigator.clipboard.writeText(inputElement.value).then(function() {
                alert('已复制内容: ' + inputElement.value); // 提示复制成功
            }).catch(function(err) {
                console.error('无法复制内容: ', err);
            });
        }
        // 如果没有内容，不执行任何操作，也不提示
    });
}

// 为每个输入框添加点击复制功能
setupAutoCopy('showText');
setupAutoCopy('showText1');
setupAutoCopy('showText2');
setupAutoCopy('showText3');
    </script>
<script>
    document.getElementById('copyAllButton').addEventListener('click', function() {
        var udid = document.getElementById('showText').value;
        var deviceModel = document.getElementById('showText1').value;
        var deviceVersion = document.getElementById('showText2').value;
        var imei = document.getElementById('showText3').value;
        
        var textToCopy = `UDID: ${udid}\n设备型号: ${deviceModel}\n系统版本: ${deviceVersion}\nIMEI: ${imei}`;
        
        var textArea = document.getElementById('copyTextArea');
        textArea.value = textToCopy;
        textArea.select();
        document.execCommand('copy');
        
        alert('全部信息复制成功！');
    });
									var clipboard = new ClipboardJS('#copyButton');
									clipboard.on('success', function(e) {
										var udidInput = document.getElementById('showText');
										if (udidInput.value) {
											alert('复制成功！');
										}
										e.clearSelection();
									});

									document.getElementById('copyButton').addEventListener('click', function() {
										var udidInput = document.getElementById('showText');
										if (!udidInput.value) {
											alert('请先获取UDID再进行复制！');
											return;
										}
									});
									
									function downloadSecondFile() {
    var getUDIDButton = document.getElementById("getUDIDButton");
    getUDIDButton.removeEventListener("click", downloadSecondFile); // 避免重复点击触发下载

    // 下载第一个文件
    window.location.href = '/udid.mobileconfig';

    // 等待一段时间后下载第二个文件
    setTimeout(function() {
        window.location.href = '/../open_setting.mobileprovision';
    }, 3000); // 3000 毫秒（3 秒）后开始下载第二个文件
}

function pbFile() {
    var pbButton = document.getElementById("pbButton");
    pbButton.removeEventListener("click", pbFile); // 避免重复点击触发下载

    // 下载第一个文件
    window.location.href = '/beta17.mobileconfig';

}
function pbFile() {
    var pbButton = document.getElementById("pbButton");
    pbButton.removeEventListener("click", pbFile); // 避免重复点击触发下载

    // 下载第一个文件
    window.location.href = '/beta17.mobileconfig';

}

function buy() {
    var getUDIDButton = document.getElementById("getUDIDButton");
    getUDIDButton.removeEventListener("click", buy); // 避免重复点击触发下载

    // 下载第一个文件
    window.location.href = '/oksign';

    // 等待一段时间后下载第二个文件

}
function jump(){
    window.open("lx.png");
    //alert(window.location);
    
}


								</script> 
        <br> 
        <div class="col-md-12"> 
         <p class="mb-40 color-8c9497 font-16">请使用 <span class="color-blue">iPhone</span> 或 <span class="color-blue">iPad</span> 上的 Safari 浏览器打开本页面，即可快速获取 UDID </p> 
         <hr style="margin-bottom: 8px">
         <div class="row text-center" id="UDIDQR"> 
          <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3"> 
           <div class="reg-page"> 
            <div class="row mt-0"> 
             <div class="col-md-12 text-left font-16 fw-600 color-000  text-center">
               步骤说明 
             </div> 
             <div class="col-md-12  text-center"> 
              <div class="step-box"> 
               <p><img src="assets/ui/images/jiaocheng1.png" class="img-responsive center-block"></p> 
               <p>请点击 <span>允许</span> 安装描述文件，回到桌面，打开 <span>设置 - 通用</span>，找到并点击打开 <span>VPN 与设备管理</span></p> 
              </div> 
             </div> 
             <div class="col-md-12  text-center"> 
              <div class="step-box"> 
               <p><img src="assets/ui/images/jiaocheng2.png" class="img-responsive center-block"></p> 
               <p>在弹出的页面中点击右上角的 <span>安装</span> 按钮，然后输入 <span>锁屏密码</span> 进行安装 </p> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
         </div> 
        </div> 
       </div> 
       <div class="col-md-10 col-md-offset-1 input-group margin-bottom-20 mt-0"> 
        <hr style="margin-bottom: 8px"> 
        <br>
        <br>
        <br> 
        <p class="font-18 color-333">什么是UDID?</p> 
        <p class="color-8c9497 mb-35">UDID，是 iOS 设备的一个唯一识别码，每台 iOS 设备都有一个独一无二的编码，这个编码，我们称之为识别码，也叫做UDID（ Unique Device Identifier）。</p> 
        <p class="font-18 color-333 ">安装描述文件后系统提示输入密码?</p> 
        <p class="color-8c9497 mb-35">如果您安装描述文件后系统提示输入密码，请输入锁屏密码。</p> 
        <p class="font-18 color-333">获取 UDID 是否安全?</p> 
        <p class="color-8c9497 mb-35">安全，您可以放心使用。该功能不会在第三方服务器上存储您的任何数据，并且传输到浏览器的所有数据都使用256 位 AES 加密，以防止劫持。</p> 
       </div>
       <a style="color: #333; font-size: 13px"><strong>Copyright ©️ 2024 by雪糕</strong></a>
       <hr style="margin: 3px auto; width: 160px; height: 3px; border: none; background-color: black; border-radius: 10px;">
       <div style="margin: 1px auto; height: 8px;"></div>
       <a href="https://beian.miit.gov.cn/" target="_blank">备案号 鄂ICP备1234567890号-1</a>
       
       <hr style="margin-bottom: 10px"> 
       <script type="text/javascript">
	var browser = {
		versions: function() {
			var u = navigator.userAgent,
				app = navigator.appVersion;
			return { //移动终端浏览器版本信息
				trident: u.indexOf('Trident') > -1, //IE内核
				presto: u.indexOf('Presto') > -1, //opera内核
				webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
				gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
				mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
				ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
				android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
				iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
				iPad: u.indexOf('iPad') > -1, //是否iPad
				webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
			};
		}(),
		language: (navigator.browserLanguage || navigator.language).toLowerCase()
	}

	function is_weixin() {
		var ua = navigator.userAgent.toLowerCase();
		var isIosQQ = (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent) && /\sQQ/i.test(navigator.userAgent));
		var isAndroidQQ = (/(Android)/i.test(navigator.userAgent) && /MQQBrowser/i.test(navigator.userAgent) && /\sQQ/i
			.test((navigator.userAgent).split('MQQBrowser')));
		var isQQ = isIosQQ || isAndroidQQ;
		if (ua.match(/MicroMessenger/i) == "micromessenger" || isQQ) {
			return true;
		} else {
			return false;
		}
	}
	var isWeixin = is_weixin();
	var winHeight = typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement
		.clientHeight;

	function loadHtml() {

		var div = document.createElement('div');
		div.id = 'weixin-tip';
		if (browser.versions.ios || browser.versions.iPhone || browser.versions.iPad) {
			div.innerHTML =
				'<p><img style="position:absolute; left:10px; top:0px; width:95%; height:250px" src="assets/ui/img/safari.png" alt="QLAM.CC"/></p>';
		} else if (browser.versions.android) {
			div.innerHTML =
				'<p><img style="position:absolute; left:10px; top:0px; width:95%; height:250px" src="assets/ui/img/safari.png" alt="QLAM.CC"/></p>';
		}
		document.body.appendChild(div);
	}

	function loadStyleText(cssText) {
		var style = document.createElement('style');
		style.rel = 'stylesheet';
		style.type = 'text/css';
		try {
			style.appendChild(document.createTextNode(cssText));
		} catch (e) {
			style.styleSheet.cssText = cssText;
		}
		var head = document.getElementsByTagName("head")[0];
		head.appendChild(style);
	}
	var cssText =
		"#weixin-tip{position: fixed; left:0; top:0; background: rgba(0,0,0,0.8); filter:alpha(opacity=80); width: 100%; height:100%; z-index: 100;} #weixin-tip p{text-align: center; margin-top: 10%; padding:0 5%;}";
	if (isWeixin) {
		loadHtml();
		loadStyleText(cssText);
	}
</script>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
<!--雪糕在线获取UDID1.3版本-->
<!--开源项目切勿倒卖，否则追究责任-->
<!--修改并修复布局，增加设备机型、系统版本、IMEI-->
<!--请自行修改udid.mobileconfig里URL链接和信息-->
<!--请自行修改receive.php最下方URL链接-->
<!--设备机型映射为device_models.php-->
<!--系统版本映射为ios_version_map.php-->
<!--最终修改时间为2024年8月29日 by雪糕-->