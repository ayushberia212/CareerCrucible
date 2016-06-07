<?php
$query = "SELECT news_id, title FROM news WHERE news_id ORDER BY news_id DESC LIMIT 5;";
$res = $db->query($query);
echo'<div class=" noscreen section-gray"style="margin-top:30px;">
	<div class="popular-news">
		<h3 style="text-align:left;border-bottom:1px solid grey;">News</h3>
		<div class="popular-grids">';
			if($res->num_rows > 0){
				while($tuple = $res->fetch_assoc()){
					echo '<div class="popular-grid">
						<a class="title" href="/news/news/article.php?id='.$tuple["news_id"].'">'. $tuple["title"] .'</a>
						<p>On Mar 3 2016 <!--<br><a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a>--></p>
					</div>';
				}
			}
		echo " </div>
	</div>
</div>";
?>