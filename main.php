<?php session_start(); ?>
<?php
    date_default_timezone_set("America/New_York");
    include ('assets/globalvars.php');
    echo '
<html>
	<head>';
    include ('style.css');
    echo '
		<title>
			Lucid
		</title>
	</head>
	<body>
		<center>';
		echo "<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700,200italic,400italic,700italic' rel='stylesheet' type='text/css'>
";
		
			include ('assets/header.php');


		if ($_GET['p']) {
            $page = $_GET['p'];
            if (file_exists('pages/loggedin/'.$page.'.php')) {
              	echo "";
              	include('pages/loggedin/'.$page.'.php');
            } else {
             	echo "Page not found.";
            }
        } else { 
			echo "<div class='featured'>
					<div class='featured_title'>
						Featured Reviews
					</div>

					<div class='featured_background' style='background-image: url(images/entrypics/wolfbig.jpg);'>
						<div class='featured_entrytitle'>
							Tyler, the Creator - <i>Wolf</i><br />
							<span class='featured_author'>By Lisa W.</span>
						</div>
						<div class='featured_entry'>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis commodo tellus in felis pellentesque pharetra eu a ipsum. Integer condimentum. . .
						</div>
					</div>

					<div class='featured_background' style='background-image: url(images/entrypics/departedbig.jpg);'>
						<div class='featured_entrytitle'>
							<i>The Departed</i><br />
							<span class='featured_author'>By Amanda D.</span>
						</div>
						<div class='featured_entry'>
							Quisque tempus iaculis lorem vitae aliquam. Curabitur quis ante mauris, eu ultricies magna. Integer laoreet pharetra odio, eu tincidunt arcu. . .
						</div>
					</div>

				</div>
				<div class='mainarea'>

					<div id='entryholder'>

					<div class='mainarea_entry entry_movies'>
						<div class='entry_title'><i>The Departed</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/departed.jpg);'>
							<img src='images/entrypics/departed.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Amanda D.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								5/13/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 3
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_music'>
						<div class='entry_title'>Tyler, the Creator - <i>Wolf</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/wolf.jpg);''>
							<img src='images/entrypics/wolf.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Lisa W.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								5/13/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 3
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_music'>
						<div class='entry_title'>Death Cab for Cutie - <i>Transatlanticism</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/deathcab.jpg);''>
							<img src='images/entrypics/deathcab.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Rory C.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								12/24/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 0
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_games'>
						<div class='entry_title'>Bioshock Infinite</div>
						<div class='entry_image' style='background-image: url(images/entrypics/bioshock.jpg);''>
							<img src='images/entrypics/bioshock.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Randy W.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								4/4/14
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 1
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_books'>
						<div class='entry_title'><i>One Flew Over the Cuckoo's Nest</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/kesey.jpg);''>
							<img src='images/entrypics/kesey.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Dan T.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								4/4/14
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 15
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_tv'>
						<div class='entry_title'>Lost</div>
						<div class='entry_image' style='background-image: url(images/entrypics/lost.jpg);''>
							<img src='images/entrypics/lost.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Duncan T.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								6/13/98
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 45
							</div>
							<div class='clear'></div>
						</div>
					</div>











					<div class='mainarea_entry entry_movies'>
						<div class='entry_title'><i>The Departed</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/departed.jpg);'>
							<img src='images/entrypics/departed.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Amanda D.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								5/13/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 3
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_music'>
						<div class='entry_title'>Tyler, the Creator - <i>Wolf</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/wolf.jpg);''>
							<img src='images/entrypics/wolf.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Lisa W.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								5/13/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 3
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_music'>
						<div class='entry_title'>Death Cab for Cutie - <i>Transatlanticism</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/deathcab.jpg);''>
							<img src='images/entrypics/deathcab.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Rory C.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								12/24/13
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 0
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_games'>
						<div class='entry_title'>Bioshock Infinite</div>
						<div class='entry_image' style='background-image: url(images/entrypics/bioshock.jpg);''>
							<img src='images/entrypics/bioshock.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Randy W.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								4/4/14
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 1
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_books'>
						<div class='entry_title'><i>One Flew Over the Cuckoo's Nest</i></div>
						<div class='entry_image' style='background-image: url(images/entrypics/kesey.jpg);''>
							<img src='images/entrypics/kesey.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Dan T.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								4/4/14
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 15
							</div>
							<div class='clear'></div>
						</div>
					</div>

					<div class='mainarea_entry entry_tv'>
						<div class='entry_title'>Lost</div>
						<div class='entry_image' style='background-image: url(images/entrypics/lost.jpg);''>
							<img src='images/entrypics/lost.jpg'  style='visibility:hidden'/>
						</div>
						<div class='entry_reviewedby'>
							Reviewed by
							<br />
							<span class='entry_author'>
								Duncan T.
							</span>
						</div>
						<div class='date_comments'>
							<div class='entry_date'>
								6/13/98
							</div>
							<div class='entry_comments'>
								<img src='images/balloon.png' class='commentpic'> 45
							</div>
							<div class='clear'></div>
						</div>
					</div>




					</div>

					



					<div class='clear'></div>
				</div>
				<div class='clear'></div>";
		}

			echo '</div>
				
		</center>

		<div id="loginpopup" class="popup">
			<div class="popup_title">
				Log In
				<div class="b-close">
					X
				</div>
				<div class="clear"></div>
			</div>
			<div class="popup_content">
				Username:<br />
				<input type="text" class="popup_input" /><br /><br />
				Password:<br />
				<input type="password" class="popup_input" /><br /><br />
				<input type="submit" class="popup_button" value="Log In" />
			</div>
		</div>

		<div id="regpopup" class="popup">
			<div class="popup_title">
				Register
				<div class="b-close">
					X
				</div>
				<div class="clear"></div>
			</div>
			<div class="popup_content">
				Class Code:<br />
				<input type="text" class="popup_input" /><br /><br />
				<input type="submit" class="popup_button" value="Sign Up" />
			</div>
		</div>

		<script src="assets/jquery-1.9.1.min.js"></script>
		<script src="assets/jquery.masonry.min.js"></script>
		<script src="assets/jquery.bpopup.min.js"></script>
		<script src="assets/scripts.js"></script>

	</body>
</html>';
			
?>
