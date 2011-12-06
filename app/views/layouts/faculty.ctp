<!DOCTYPE HTML PUBLIC "-//W3C//DATD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo __("ECNU Research Expert");?></title>
<link rel="stylesheet" href="StyleHome.css" type="text/css" />
<?php  
    echo $this->Html->css('StyleHome');
	echo $this->Html->css('mask');
	echo $this->Html->css('styles');
	echo $this->Html->css('login-box');
    echo $this->Html->script('SliderForHome');
    echo $this->Html->script('jquery');
	echo $this->Html->script('slider');
	echo $this->Html->script('superfish');
	echo $this->Html->script('custom');
?>
<style type="text/css">
.auto-style1 {
	margin-top: 23;
}
</style>
<script type="text/javascript">
		jQuery.PictureSlides.set({
			// Switches to decide what features to use
			useFadingIn : true,
			useFadingOut : true,
			useFadeWhenNotSlideshow : true,
			useFadeForSlideshow : true,
			useDimBackgroundForSlideshow : false,
			loopSlideshow : true,
			usePreloading : true,
			useAltAsTooltip : true,
			useTextAsTooltip : false,
			
			// Fading settings
			fadeTime : 500, // Milliseconds	
			timeForSlideInSlideshow : 2000, // Milliseconds

			// At page load
			startIndex : 1,	
			startSlideShowFromBeginning : true,
			startSlideshowAtLoad : true,
			dimBackgroundAtLoad : false,

			// Large images to use and thumbnail settings
				images : [
				{
					image : "pictures/5.jpg", 
					alt : "校训和我们敬爱的毛爷爷",
					text : "This is picture 1"	
				},
				{                                  
					
					image : "pictures/0.jpg", 
					alt : "理科大楼",
					text : "This is picture 2"
				},
				{                                  
					
					image : "pictures/9.jpg", 
					alt : "春天来了",
					text : "This is picture 3"
				},
				{                                  
					
					image : "pictures/1.jpg", 
					alt : "漫步河畔",
					text : "This is picture 4"
				},
				{                                  
					
					image : "pictures/4.jpg", 
					alt : "夏之初",
					text : "This is picture 5"
				},
				
				{                                  
					
					image : "pictures/3.jpg", 
					alt : "丽娃河",
				 	text : "This is picture 6",
				},
				{                                  
					
					image : "pictures/6.jpg", 
					alt : "丽娃河边的垂柳",
					text : "This is picture 6"
				},
				{                                  
					
					image : "pictures/7.jpg", 
					alt : "繁花似锦",
					text : "This is picture 7"
				},
				{                                  
					
					image : "pictures/8.jpg", 
					alt : "丽娃桥",
					text : "This is picture 8"
				},
				{                                  
					
					image : "pictures/11.jpg", 
					alt : "华师冬景",
					text : "This is picture 9"
				},
			],
			thumbnailActivationEvent : "click",

			// Classes of HTML elements to use
			mainImageClass : "picture-slides-image", // Mandatory
			fadeContainerClass : "picture-slides-fade-container"
		});
</script>
</head>

<body>
<div id="container">
	 <div id="header" class="auto-style1">
    	<h1><a href="home.html"><?php echo __("ECNU");?><strong><?php echo __("Research Expert");?></strong></a></h1>
        <h2><?php echo __("Transparent, Efficient, Informative");?></h2>
        <div class="clear"></div>
      </div>
<?php  echo $this->element('navibar');?>
        
    <div id="body">
		<div id="content">
            <div class="box">
				<h2><?php echo __("Faculties and Schools");?>学院概况</h2>
				<p>华东师范大学是一所综合性研究型大学。目前设置有人文社会科学学院、社会发展学院、外语学院、对外汉语学院、教育科学学院、心理与认知科学学院、学前教育与特殊教育学院、体育与健康学院、公共管理学院、商学院、金融与统计学院、传播学院、艺术学院、设计学院、理工学院、资源与环境科学学院、生命科学学院、信息科学技术学院、软件学院 19 个全日制学院，思勉人文高等研究院、国际关系和地区发展研究院、河口海岸科学研究院、科学与技术跨学科高等研究院、艺术研究所 5 个研究院（所），继续教育学院和网络教育学院 2 个管理型学院，含 58 系， 70 个本科专业，其中中文、历史、数学、地理、心理和物理 6 个专业是国家文理科基础科学人才培养和科学研究基地。				
				</p>
			<?php echo $content_for_layout;?>
            </div>
        </div>
        <div class="sidebar">
                                               

        <div id="picture-slides-frame">
			<div class="picture-slides-container">
				<div class="picture-slides-fade-container">
					<img class="picture-slides-image" src="http://localhost/research2/pictures/5.jpg" alt="This is picture 1" />
				</div>
			</div>
		</div>
				
        </div>
    	<div class="clear"></div>
     
<?php echo $this->element('loginform');

      echo $this->element('language');?>  
  </div>
    <div id="footer">
        <div class="footer-content">
    
                <span class="sitename">ECNU Research Center</span>
                 <p class="footer-links">
                 <a href="#container" class="backtotop">Back to top</a>
               	 </p>
                 <div class="clear"></div>
        </div>
    <div class="footer-bottom">
            <p>&copy; YourSite 2011. Website Designed For <a href="http://www.ecnu.edu.cn">ECNU</a> | <a href="http://www.ecnu.edu.cn">Contact Us</a> | All Rights Reserved</p>
         </div>
    
    </div>
</div>
</body>
</html>