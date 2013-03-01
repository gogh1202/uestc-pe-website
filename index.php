<!DOCTYPE HTML>
<html>
 <head>
  <title>物理电子学院</title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="创新团队">
  <meta name="Keywords" content="电子科技大学物理电子学院">
  <meta name="Description" content="电子科技大学物理电子学院">
  <meta http-equiv="charset" content="utf8">
  <link rel="stylesheet" type="text/css" href="css/common.css" />
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  </head>
 <body>
 <?php
 	include("config/classid.php");
 	include("lib/connect.php");
 	include("lib/list.php")
?>
 <div>
   <div id="map">
      <a id="map_a" href="#">加入收藏</a>
	  <a id="map_a" href="#">网站地图</a>
	  <a id="map_a" href="#">简  / 繁</a>
	  <a id="map_a" href="#">登 录</a>
   </div> 

  <div   id="header">
<div  class="a" id="header_main"
    <!--logo-->
   <a  href="#"><img id="logo"  width="220px"src="image/logo.png"></img></a>
   
   <!--搜索表单-->
   
   <form id="form_one" >
		<input type="radio" name="sex" value="title" />标题
		<input type="radio" name="sex" value="title" />内容
		<input type="radio" name="sex" value="title" />作者
		<input type="text" name="firstname" /><a href="#">搜索</a>
	</form>
	
<!--上面导航-->
   <div class="Navigation">    
             <ul>
                  <li><a href="#" class="Navigation">首页</a></li>
                  <li><a href="#" class="Navigation">学院行政</a>
                       <ul>
                          <li><a href="#">学院公告</a></li>
                          <li><a href="#">学院文件</a></li>
                          <li><a href="#">办事指南</a></li>
                          <li><a href="#">后勤服务</a></li>
                          <li><a href="#">院务公开</a></li>
                        </ul>
                  </li>
                  <li>
                      <a href="#" class="Navigation">学科建设</a>
                  </li>
                  <li>
                      <a href="#" class="Navigation">人才培养</a>
                        <ul>
                          <li> <a href="#">本科教育</a></li>
                            <li><a href="#">研究生教育</a></li>
                            <li><a href="#">继续教育</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">学生工作</a>
                        <ul>
                          <li><a href="#">学生科公告</a></li>
                            <li><a href="#">学风建设</a></li>
                            <li><a href="#">学工动态</a></li>
                            <li><a href="#">就业实习</a></li>
                            <li><a href="#">学生活动</a></li>
                            <li><a href="#">党员风采</a></li>
                            <li><a href="#">初晴文学</a></li>
                            <li><a href="#">我爱我班</a></li>
                            <li><a href="#">英语学习</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">党建工作</a>
                        <ul>
                          <li><a href="#">党建公告</a></li>
                            <li><a href="#">组织机构</a></li>
                            <li><a href="#">党建新闻</a></li>
                            <li><a href="#">工作计划</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">人事工作</a>
                        <ul>
                          <li><a href="#">人事公告</a></li>
                            <li><a href="#">招贤纳士</a></li>
                            <li><a href="#">教师年鉴</a></li>
                            <li><a href="#">年度考核</a></li>
                        </ul>
                  </li>
	              <li><a href="#" class="Navigation">科学研究</a>
                        <ul>
                            <li><a href="#">科研公告</a></li>
						    <li><a href="#">科研机构</a></li>
                            <li><a href="#">科研成果</a></li>
                            <li><a href="#">科研政策</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">合作交流</a>
                        <ul>
                            <li><a href="#">合作交流</a></li>
                            <li><a href="#">涉外常识</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">教工之家</a>
                        <ul>
                           <li><a href="#">教工活动</a></li>
                           <li><a href="#">职工福利</a></li>
                        </ul>
                  </li>
	              <li><a href="#" class="Navigation">院友之家</a>
                        <ul>
                            <li><a href="#">信息公告</a></li>
						    <li><a href="#">院友风采</a></li>
                            <li><a href="#">院友动态</a></li>
                            <li><a href="#">捐资助学</a></li>
                        </ul>
                  </li>
                  <li><a href="#" class="Navigation">资料</a></li>
              </ul>
        </div> 
   </div>
   
  </div> 
</div>
 <div id="content">
   <!--学院新闻-->
 <div id="academy_news">
	<div id="academy_news_content">
		
		<img id="academy_news_img" src="image/acad.jpg" >
		</img>
		<img  id="academy_news_title_img" src="image/newstitle.png" width="350px"/>
		
		<div id="academy_news_title">
		<!--news of institute-->
			<hr>
		<ul class="big" id="academy_news_title">
			<?php list_article($cid_news, 10) ?>
	    </ul>
		</div>
	</div>
 </div>
 <!--除banner下面整体部分-->
 <div id="main_content">
 <!--左边导航-->
 <div id="left_Navigation">
	<!--学校概况-->
	<div>
		<div id="left_Navigation_detail_title">
			<p align="center">学院概况</p>
			<hr id="left_Navigation_detail_hr"/>
		</div>
		
		
		<div id="left_Navigation_detail">
			
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>学院简介</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>学院沿革</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>院长致辞</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>学院领导</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>学术机构</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>行政机构</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>师资队伍</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>物电大事</span></a>
		</div>
	</div>
<br>
<!--信息服务-->
	<div>
		<div id="left_Navigation_detail_title">
			<p align="center">信息服务</p>
			<hr id="left_Navigation_detail_hr"/>
		</div>
		
		
		<div id="left_Navigation_detail">
			
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>招生信息</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>招贤纳士</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>报告讲座</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>就业信息</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>邮件收发</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>国资管理</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>图书资料</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>安全综治</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>航班信息</span></a>&nbsp;&nbsp;&nbsp;
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>列车信息</span></a>
		</div>
	</div>
<br>
<!--院内链接-->
	<div>
		<div id="left_Navigation_detail_title">
			<p align="center">院内链接</p>
			<hr id="left_Navigation_detail_hr"/>
		</div>
		
		
		<div id="left_Navigation_detail">
			
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>UESTC大学生创新团队</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验中心</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>数学物理方法精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>电磁粒子模拟研究课题组</span></a><br>
			
		</div>
	</div>
<br>
<!--友情链接-->
	<div>
		<div id="left_Navigation_detail_title">
			<p align="center">友情链接</p>
			<hr id="left_Navigation_detail_hr"/>
		</div>
		
		
		<div id="left_Navigation_detail">
			
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>UESTC大学生创新团队</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验中心</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>数学物理方法精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>电磁粒子模拟研究课题组</span></a><br>
			
		</div>
	</div>
<br>

<!--网站调查-->
	<div>
		<div id="left_Navigation_detail_title">
			<p align="center">网站调查</p>
			<hr id="left_Navigation_detail_hr"/>
		</div>
		
		
		<div id="left_Navigation_detail">
			
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>UESTC大学生创新团队</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验中心</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>大学物理实验精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>数学物理方法精品课程</span></a><br>
			<img width="20px" src="image/tag.png"/>&nbsp;<a href="#"span>电磁粒子模拟研究课题组</span></a><br>
			
		</div>
	</div>
<br>
<!--网站管理入口-->

 </div>
 <!--左边导航结束-->
 
 <!--左边内容-->
 <div id="right_content">
	<!--学院行政-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_1_title">
		</div >
		
		
		<div id="right_content_piece_1_content_bg" >
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_execu, 5) ?>
		</ul>
		</div>
	</div>
	<!--学生工作-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_2_title">
		
		</div >
		
		
		<div id="right_content_piece_1_content_bg"  >
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_student, 5) ?>
		</ul>
		</div>
	</div>
	<!--本科生教育-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_3_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_ungrad, 5) ?>
		</ul>
		</div>
	</div>
	<!--研究生教育-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_4_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_postgrad, 5) ?>
		</ul>
		</div>
	</div>
	<!--党建工作-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_5_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_comparty, 5) ?>
		</ul>
		</div>
	</div>
	<!--人事工作-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_6_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_arrange, 5) ?>
		</ul>
		</div>
	</div>
	<!--科学研究-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_7_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
	<?php list_article($cid_scien, 5) ?>
		</ul>
		</div>
	</div>
	<!--继续教育-->
	<div id="right_content_piece_1">
		<div id="right_content_piece_8_title">
		</div >
		
		
		<div  id="right_content_piece_1_content_bg">
		
		<ul id="right_content_piece_1_content">
<?php list_article($cid_continedu, 5) ?>
		</ul>
		</div>
		
	</div>

 </div>
 
 </div>

  </div>
<?php include('page/footer.html')?>
   
 </body>
</html>
