<!DOCTYPE html> 
<html>
	<head>
                <meta charset="UTF-8" />
		<title>Bratislava and central European food</title>
		<link rel="stylesheet" href="css/bratislava-food.css" />
                
        </head>
		<body>
			<div class="wrapper">
			<header>
                            <h1 id="headerText">Bratislava cuisine</h1>
				<div id="searchBox">
					<form action="">
				<!--	 <div class="searchButton"><input id="searchButton" type="submit" value="search" /></div> -->
						<input id="searchField" type="search" name="search" size="20" placeholder="Search..." />
					</form>
				</div> <!-- search field -->
				<nav>
					<ul id="nav-list">
						<li><a href="bratislava-food-main.html">Home</a></li>
                                                <li><a href="recipes.html" class="current">Recipes</a></li>
                                                <li><a href="ingredients-list.html">Ingredients</a></li>
						<li><a href="about.html">About</a></li>
						<li id="signup-button">Sign up</li>
						<li id="login-button">Log in</li>
						<li><a href="">Follow</a></li>
						<li><a href="mailto:sylvuso@yahoo.co.uk">Contact</a></li>
					</ul>
				</nav>
			</header>
                            
                             <div class="signup-login-window" id="login-window">   <!-- popup login div -->
                                                    <div class="close-button">x</div>
                                                    <form action="login.php" id="login" method="post">    
			<p><input type="text" name="name" placeholder="Username:" size="15" maxlength="30" /></p>
			<p><input type="password" name="password" placeholder="Password*:" required="required" size="15" maxlength="30" /></p>
			<p><input type="submit" id="submit1" value="Login">
                            <p>Not yet signed up? <a href="">Sign up in here.</a></p>
		</form>
                                
                    </div> <!--login div -->  
                    	
			
                            <p class="recipe-text" id="meal-information">This is one my most favourite meals! They are similar to                                   Swiss <span>rösti</span> and Jewish <span>latkes</span>. I love them on a peppery side and always add a lot of garlic and black pepper, however you can decide how much do you want to add.<br /><br />
                                We don't normally weight the ingredients and the amount of flour and seasoning varies depending on quality of potatoes and your taste. I have written the approximate amounts so that you have a guide to start but feel free to adapt them.   </p>
                            <div class="single-recipe"><img src="images/pot-fritters-large.jpg" alt="Potato fritters" /></div>
			     <div class="recipe-text" id="ingredients-amounts">
                                 <p>The amounts below are for <span class="ingr-calculation">1</span> portion. <br />How many portions do you want to make? </p>
				<form method="post" action="" id="portions-choice">
					<label for="ingr-amount"></label>
					<input type="number" id="portions-amount" name="portions" min="1" value="1" />
                                </form>
				<p id="information-about-amount"></p> 
			
                                <br />
                                <h2>Ingredients:</h2>
                                <ul>
                                    <li class="incalc"><span class="ingr-calculation">0.25</span> kg potatoes</li>
                                    <li class="incalc"><span class="ingr-calculation">75</span> g plain flour</li>
                                    <li class="incalc"><span class="ingr-calculation">2</span> tbsp breadcrumbs (optional)</li>
                                    <li class="incalc"><span class="ingr-calculation">1</span> cloves of garlic, pressed</li>
                                    <li class="incalc"><span class="ingr-calculation">1</span> eggs</li>
                                    <li>Generous amount of salt and pepper to taste</li>
                                    <li>Generous amount of marjoram</li>
                                    <li>Lard or vegetable oil for frying</li>
                                </ul>
                                
                            </div>
                         <div>
			<h2 class="clear">Method:</h2>
			<ol>
				<li>Grate potatoes and strain the juice by pressing them slightly in a colander.</li>
				<li>Add egg, flour, breadcrumbs, garlic, marjoram and seasoning and stir together.</li>
                                <li>Heat lard or oil in the frying pan.</li>
				<li>Make small "pancakes" about 3cm thick in pan and fry on medium heat until they are golden
                                    and crispy on top and cooked through in the middle.</li>
                                <li>Serve with <a href="ingredients-list.html">kefir</a>, buttermilk or vegetable salad - or relish on their own.</li>
			</ol>
                        </div>
                            
			<br />
                        
                       <div class="method-comments" id="commentSection">

                       <h2>Your comments</h2><br />
                       <?php include('forum.php'); ?> 
                        <form id="commentForm" action="post_action.php" method="post" accept-charset="utf=8">
                            <p><br /><input name="subject" type="text" size="30" maxlength="100" placeholder="Subject" /></p>
                            <p><textarea id="comments" name="message" cols="50" rows="5"></textarea></p>
                            
                            <p><input name="submit" type="submit" value="Submit" id="submit-comments"/></p>
			</form>
                        </div>

 
                         <footer>
				<div id="todaysDate"></div>
				<div id="copyright">&copy Bratislava food 2015</div>			

			</footer>
                                
                        </div> <!--class wrapper -->
                        
			<script src="js/jquery-1.11.3.js"></script>
		 	<script src="js/recipes-amounts-form.js"></script>
                        <script src="js/signup.js"></script>
		<script src="js/register.js"></script> 
               <script src="js/login.js"></script> 
                <script src="js/goodbye.js"></script>
		 
		</body>
	</html>
	
     