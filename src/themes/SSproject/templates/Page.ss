<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <% include Head %>
    </head>
	<body>	
		<div id="container">
            <!-- !HEADER -->
            <div class="header">
                <% include Menu %>
            </div><!-- end of header -->


            <!-- !MAIN -->
            <div class="main">
			$Layout 
			$Form
            </div><!-- end of main -->


            <!-- !FOOTER -->
            <div class="footer">
                <% include Footer %>
            </div><!-- end of footer -->
        </div> <!--! end of container -->


        <!-- Javascript at the bottom for fast page loading -->
        <% include Scripts %>


    </body>
</html>
