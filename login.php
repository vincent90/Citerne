    <?php include('conn.php') ?>
	<html>
        <body>
            <!-- Begin Page Content -->
            <div id="container">
                <form action="login_process.php" method="post">
                    
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                    <input type="submit" value="Login">
					<input name="disconnect" type="submit" value="Deconnection">

                </form>
				<?php 
				session_start();
				if(isset($_SESSION['username'])){
					echo "Vous etes deja connecte!";
				}else{
					echo "Vous n'etes pas connecte!";
				}				?>
            </div><!--/ container-->
            <!-- End Page Content -->
        </body>
        </html>