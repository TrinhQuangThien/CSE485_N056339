<?php
include_once "../page_header.php";
echo "<br><br><br>";
	echo "<div class='container'>";
		echo "<div class='row'>";
			echo "<div class='col-md-12'>";
				echo "<article>";
					echo "<h2 class='header-film'>Quái vật Venom</h2>";
					echo "<video width='650' height='400' controls>";
						echo "<source src='../	media/venom.mp4' type='video/mp4'>";
							echo "<source src='media/boomboo.ogg' type='video/ogg'>";
								echo "Your browser does not support the video tag.";
							echo "</video>";
						echo "</article>";
					echo "</div>";
				echo "</div>";
			echo "</div>";

include_once "../page_footer.php";
?>