<!DOCTYPE html>
<html lang="zh">
 <head> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" /> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge" /> 
  <title>2022最新小米乐心运动步数提交平台源码</title>
  <meta name="Description" content="2022最新小米乐心运动步数提交平台源码" /> 
  <meta name="Keywords" content="2022最新小米乐心运动步数提交平台源码" /> 
  <link rel="images/icon" href="/favicon.ico" type="image/x-icon" /> 
  <link rel="stylesheet" href="//www.layuicdn.com/layui-v2.5.7/css/layui.css" /> 
  <link rel="stylesheet" href="static/css/toolyundong.css" /> 
  <script src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js" type="text/javascript"></script> 
  <script src="//cdn.bootcss.com/layer/2.3/layer.js" type="text/javascript"></script> 
  <script src="//api.kit9.cn/Apijs/steps/steps.js" type="text/javascript"></script> 
  <script src="static/layui/layui.all.js" type="text/javascript"></script> 
 </head> 
 <body style="background-color: #F2F2F2"> 
  <div class="layui-container"> 
   <div class="layui-row layui-col-space15"> 
    <div class="layui-col-md12"> 
     <div class="layui-card"> 
      <div class="layui-card-header">
        平台公告 
      </div> 
      <div class="layui-card-body">
        乐心接口、小米接口 全部正常官方接口无第三方对接 网站永久免费
      </div> 
     </div> 
    </div> 
    <div class="layui-col-md12"> 
     <div class="layui-card"> 
      <div class="layui-card-header">
        同步平台 
      </div> 
      <div class="layui-card-body">
        支持： 
       <span class="layui-badge-rim">QQ</span> 
       <span class="layui-badge-rim">微信</span> 
       <span class="layui-badge-rim">支付宝</span> 
       <span class="layui-badge-rim">淘宝</span> 
      </div> 
     </div> 
    </div> 
    <div class="layui-col-md12"> 
     <div class="layui-card"> 
      <div class="layui-card-header">
        乐心教程 
      </div> 
      <div class="layui-card-body"> 
       <p> 1、下载乐心健康APP,安卓可在各大应用市场下载。 <br /> 2、苹果可在App Store或其他平台下载。 <br /> 3、安装APP并注册账号后点击-我-数据共享-绑定至相关应用即可。 <br /> 4、绑定需要的应用后，在本页面输入刚刚注册的账号及要修改的步数点击提交修改。 </p> 
      </div> 
     </div> 
    </div> 
    <div class="layui-col-md12"> 
     <div class="layui-card"> 
      <div class="layui-card-header">
        小米教程 
      </div> 
      <div class="layui-card-body"> 
       <p> 1、下载小米运动APP,安卓可在各大应用市场下载。 <br /> 2、苹果可在App Store或其他平台下载。 <br /> 3、安装APP并注册账号后点击-我-第三方接入-绑定至相关应用即可。 <br /> 4、绑定需要的应用后，在本页面输入刚刚注册的账号及要修改的步数点击提交修改。 </p> 
      </div> 
     </div> 
    </div> 
    <div class="layui-col-md12"> 
     <div class="layui-card"> 
      <div class="layui-card-header">
        接口选择 
      </div> 
      <div class="layui-card-body"> 
       <div class="layui-tab layui-tab-brief" lay-filter="tab"> 
        <ul class="layui-tab-title" style="text-align: center"> 
         <li class="layui-this">小米运动</li> 
         <li>乐心运动</li> 
        </ul> 
        <div class="layui-tab-content"> 
         <div class="layui-tab-item layui-show"> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">小米账号</label> 
             <div class="layui-input-block"> 
              <input id="mobile" type="text" class="layui-input" placeholder="输入小米运动账号" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">小米密码</label> 
             <div class="layui-input-block"> 
              <input id="password" type="password" class="layui-input" placeholder="输入小米运动密码" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">同步步数</label> 
             <div class="layui-input-block"> 
              <input id="step" type="number" class="layui-input" placeholder="输入同步步数" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <blockquote> 
           <center> 
            <button id="milletmotion" class="btn btn-primary my-face layui-btn">点击提交/提交后自动同步</button> 
           </center> 
          </blockquote> 
         </div> 
         <div class="layui-tab-item"> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">乐心账号</label> 
             <div class="layui-input-block"> 
              <input id="mobile" type="text" class="layui-input" placeholder="输入乐心运动账号" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">乐心密码</label> 
             <div class="layui-input-block"> 
              <input id="password" type="password" class="layui-input" placeholder="输入乐心运动密码" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div class="layui-form"> 
           <div class="layui-form-pane"> 
            <div class="layui-form-item"> 
             <label class="layui-form-label">同步步数</label> 
             <div class="layui-input-block"> 
              <input id="step" type="number" class="layui-input" placeholder="输入同步步数" /> 
             </div> 
            </div> 
           </div> 
          </div> 
          <blockquote> 
           <center> 
            <button id="lexinmotion" class="btn btn-primary my-face layui-btn">点击提交/提交后自动同步</button> 
           </center> 
          </blockquote> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <script>
    $(function () {
        layer.alert('这是公告内容'
		, {skin: 'layui-layer-molv' //样式类名
  		,title: '公告'
  		,closeBtn: 0
		});
	})
</script>  
 </body>
</html>