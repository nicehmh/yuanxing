<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<!-- External CSS -->
    <link rel="stylesheet" style="text/css" href="/yuanxing1.0/Public/css/all.css">
	<style>
	 
	</style>
	<!-- JavaScript -->
     <script src="/yuanxing1.0/Public/js/jquery-1.8.3.min.js"></script>
	 <script>
	    $(document).ready(function(e){
		    var flag="go_to_left";
			var point=0;
			var px_num;
			var widthnum=$(".center_center_top").height();
			function showImage(){
			    if(point==-widthnum*3){
				   flag="go_to_right";
				}else if(point==0){
				   flag="go_to_left";
				}
				if(flag=="go_to_left"){
				   px_num=point+"px";
				   $(".image").animate({top:px_num},500);
				   point=point-widthnum;
				}else if(flag=="go_to_right"){
				   px_num=point+"px";
				   $(".image").animate({bottom:px_num},500);
				   point=point+widthnum;
				}
			}
			set=setInterval(showImage,2000);
		});
		
	 </script>
    <title>源行</title>
  </head>
  <body>
   <div id="all">
    <div id="logo">
	   <div class="logo_left">
	     <img src="/yuanxing1.0/Public/image/yuanxing.png" style="height:50px;width:100%;"/>
	   </div>
	   <div class="logo_center">
	       <div class="logo_center_nav">
		     <ul>
               <li><a  href="">首页</a></li>
               <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2896935608&site=qq&menu=yes">在线咨询</a></li>
			   <li><a  href="">会员服务</a></li>
             </ul>
		   </div>
	   </div>
	   <div class="logo_right">
	       <div class="logo_right_find">
		       <form method="post">
			      <input type=""  placeholder="请问您有什么感兴趣的呢" class="find"/>
				  &nbsp&nbsp<input type="submit" value="搜索" style="background-color:#77DDFF;"/>
			   </form>
		   </div>
	   </div>
	</div>
	<div id="top">
	  <img src="/yuanxing1.0/Public/image/main2.jpg" alt="请稍等...." style="height:150px; width:100%;"/>
	</div>
	<div id="center">
	  <div class="center_left">
	         <div class="center_left_top">
			     <div class="model_title">大师作坊</div>
				 <div class="model_con">
				    <ul>
                       <li><a href="">&nbsp大师作坊</a></li>
                       <li><a href="">&nbsp大师作坊</a></li>
			           <li><a href="">&nbsp大师作坊</a></li>
					   <a href="" class="readmore">››more</a>
                    </ul>
				 </div>
			 </div>
	         <div class="center_left_main">
			     <div class="model_title">非遗世界</div>
				 <div class="model_con">
				    <ul>
                       <li><a href="">&nbsp非遗世界</a></li>
                       <li><a href="">&nbsp非遗世界</a></li>
			           <li><a href="">&nbsp非遗世界</a></li>
					   <a href="" class="readmore">››more</a>
                    </ul>
				 </div>
			 </div>
		     <div class="center_left_footer">
			    <div class="model_title">手工坊</div>
				 <div class="model_con">
				    <ul>
                       <li><a href="">&nbsp手工坊</a></li>
                       <li><a href="">&nbsp手工坊</a></li>
			           <li><a href="">&nbsp手工坊</a></li>
					   <a href="" class="readmore">››more</a>
                    </ul>
				 </div>
			 </div>
	 </div>
	  <div class="center_center">
	         <!--轮播图-->
	         <div class="center_center_top">
			    <ul class="image" style="width:100%;">
			      <li><img src="/yuanxing1.0/Public/image/center1.jpg" alt="请稍等...." style="height:200px; width:100%;" class="imgs"/></li>
				   <li><img src="/yuanxing1.0/Public/image/center1.jpg" alt="请稍等...." style="height:200px; width:100%;" class="imgs"/></li>
				    <li><img src="/yuanxing1.0/Public/image/center1.jpg" alt="请稍等...." style="height:200px; width:100%;" class="imgs"/></li>
				</ul>
		     </div>
	         <div class="center_center_footer">
			    <!-- 课程中心 -->
			    <div class="course">
			    	<div class="course_title">网络课程</div>
				    <div class="course_con">
					   <p>&nbsp&nbsp此版块列有进阶非遗网络课程，与体验课程相比，进阶课程更加注重系统化、专业化学习，
					   包含更加复杂的技艺和丰富的创作技巧。网课内容主要由历史背景，技艺理论学习，
					   创作理论和入门技巧模仿四部分构成。针对的对象是在某个非遗项目上具有一定基础，
					   能独立完成作品的学生。经过学习在线课程，水平具有一定的提升之后，
					   受训者参加在线的理论知识评估并提交一份独立完成的作品并完成远程答辩，
					   合格者将成为正式的传承人徒弟，拥有独立授课的技艺基础。<p>
					</div>
			    </div>
				  <div class="course">
			    	<div class="course_title">网络课程</div>
				    <div class="course_con">
					   <p>&nbsp&nbsp此版块列有进阶非遗网络课程，与体验课程相比，进阶课程更加注重系统化、专业化学习，
					   包含更加复杂的技艺和丰富的创作技巧。网课内容主要由历史背景，技艺理论学习，
					   创作理论和入门技巧模仿四部分构成。针对的对象是在某个非遗项目上具有一定基础，
					   能独立完成作品的学生。经过学习在线课程，水平具有一定的提升之后，
					   受训者参加在线的理论知识评估并提交一份独立完成的作品并完成远程答辩，
					   合格者将成为正式的传承人徒弟，拥有独立授课的技艺基础。<p>
					</div>
			    </div>
			 </div>
	  </div>
	  <div class="center_right">
	         <div class="center_right_top">
			    <form method="post" class="login" action="<?php echo U(Login/login);?>">
			      <input type="text"  placeholder="用户名" class="find" style="width:80%;"/><br/><br/>
				  <input type="password"  placeholder="密码" class="find" style="width:80%;"/><br/><br/>
				  <input type="submit" value="登录" style="background-color:#EE7700"/>
				     <ul class="login_pwd">
                       <li><a href="">忘记密码？</a></li>
                       <li><a href="">注册新账号</a></li>
                     </ul>
			
			   </form>
			 </div>
			 <div class="center_right_main">
			     <div class="model_title">课程购买</div>
				 <div class="model_con">
				     <p>&nbsp&nbsp课程对于新用户有一个推荐和引导的作用，
					用户可以自己喜欢的产品放入购物车或者直接购买。</p>
					<a href="" class="readmore">››more</a>
				 </div>
			 </div>
	         <div class="center_right_footer">
			     <div class="model_title">材料与工具</div>
				 <div class="model_con">
				    <p>&nbsp&nbsp这个板块专门用来展示与销售手工材料包。材料包内包含着完整的一套工具和材料用来制作非遗手工技艺。</p>
					<a href="" class="readmore">››more</a>
				 </div>
			 </div>
	  </div>
	</div>
	<div id="footer">
	   <p>技术支持：沸点工作室</p>
	</div>
   </div>
  </body>
</html>