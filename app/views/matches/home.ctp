	<div id="body">
		<div id="content">
		<h1><?php
		echo $result['Match']['name'];?></h1>
            <div class="box">
            	<h2><a name="rules_overview"></a>比赛说明</h2>
            	<ul>
					<li><a href="#topic">主题</a>
					</li>
					<li><a href="#introduction">说明</a></li>
					<li><a href="#demands">要求</a></li>
				</ul>
                <h4><a name="topic"></a>主题</h4>
				<?php
				$pic=$this->requestAction(array('controller'=>'MatchHeads','action'=>'gethead'),array('pass'=>array($result['Match']['id'])));
				echo $this->Html->image('images/'.$pic['MatchHead']['src'],array('alt'=>'picture','class'=>'lecturepic'));
				?>
				
              <p>
					<?php echo $result['Match']['theme'];?></p>
                <h4><a name="introduction"></a>说明</h4>
              <p>
					<?php echo $result['Match']['description'];?></p>
                <h4><a name="demands"></a>要求</h4>
					<?php echo $result['Match']['requirement'];?>
  <p></p>

            				<h2><?php echo __("awarded works");?><a name="awarded_works"></a>历届获奖作品展示</h2>
				<table>
				  <tbody><tr>
						<th><?php echo __("name");?></th>
						<th><?php echo __("introduction");?></th>
						<th><?php echo __("image");?></th>
					</tr>
					<tr>
						<td><a href="#">作品1</a></td>
						<td>此处省略1000字</td>
						<td><img width="110" height="80" border="0" src="images/project_image_example.JPG" alt=""></td>
					</tr>
					<tr>
						<td>2</td>
						<td>Fred James</td>
						<td>49</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Rachel Johnson</td>
						<td>19</td>
					</tr>
	
				</tbody></table>
				<p>&nbsp;</p>
				
								            </div>
        </div>
        <br />
        <br />
        <div class="sidebar">
            <ul>	
			
			<?php 
			foreach($matches as $result)
			{
			?>
                <li>
                    <h4><span><?php echo $this->Html->link($result['Match']['name'],array('action'=>'home',$result['Match']['id']));?></span></h4>
                    <ul class="blocklist">
                        <li><a href=home/<?php echo $result['Match']['id'];?>#rules_overview>比赛说明</a></li>
                        <li><a href=<?php echo $result['Match']['id'];?>#awarded_works>历届获奖作品</a></li>
                        <li><?php echo $this->Html->link('我要报名',array('controller'=>'applytables','action'=>'add'))?></li>
                    </ul>
                </li>
			<?php
			}
			?>	
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>