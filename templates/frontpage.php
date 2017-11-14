<?php include('../includes/header.php');  ?>
 		<ul id="topics">
 			
 			<?php if ($topics) :  ?>
 			
				<li class="topic">
						<div class="row">
							<div class="col-md-2">
								<img class="avatar pull-left" src="images/gravatar.jpg" />
							</div>
							<div class="col-md-10">
								<div class="topic-content pull-right">
									<h3><a href="topic.php">How to Write an Interior Monologue</a></h3>
									<div class="topic-info">
										<a href="category.php">Point of View</a> >> <a href="profile.php">jsa044</a> >> Posted on: June 12, 2014 
										<span class="badge pull-right">3</span>
									</div>    <!-- .topic-info -->
								</div>    <!-- .topic-content pull-right -->
							</div>    <!-- .col-md-10 -->
						</div>    <!-- .row -->
				</li>
		</ul>	
		
		
		<?php  else  :   ?>
				<p>No Topics to Display</p>				
		<?php  endif;   ?>	
		
			
		<h3>Forum Statistics</h3>
			<ul>
				<li>Total Number of Users: <strong>52</strong></li>
				<li>Total Number of Topics: <strong>10</strong></li>
				<li>Total Number of Categories: <strong>5</strong></li>
			</ul>
<?php include('../includes/footer.php'); ?>				