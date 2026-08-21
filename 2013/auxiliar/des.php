

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="style.css">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.4.4.min.js"%3E%3C/script%3E'))</script>
<script>
    function initMenu() {
      
      if ($('#menu li').has('ul')) $('#menu ul').prev().addClass('expandable'); // Expand/collapse a submenu when it exists
      $('.expandable').click(
        function() {
            $(this).next().slideToggle();
            $(this).toggleClass('expanded');
          }
        );
      }
 
    // When document ready, call initMenu() function
    $(document).ready(function() {initMenu();});
</script>

<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="header">
	<div id="logo">
		<img src="img/cabecalho_ses2.jpg"  alt="" title="Acervo do Museu do ICMC" />
		<div id="menu">
		<aside>
        <nav>
            <ul id="menu">
             <li><a href="index.php">HOME</a></li>
                <li><a href="organizers.php">ORGANIZERS</a></li>
               
                <li>
                    <a href="date.php">IMPORTANT DATES</a>
                </li>
                <li><a href="#">WORKSHOP ORGANIZERS</a></li>
                
                 <li>
                    <a href="#">TOPICS</a>
                    <ul>
                        <li><a href="anades.php">SoS Analysis & Architectural Design</a></li>
                        <li><a href="des.php">SoS Design</a></li>
                        <li><a href="conevo.php">SoS Construction and Evolution</a></li>
                        <li><a href="#">Experience</a></li>
                    </ul>
                </li>
                <li><a href="#">Contactos</a></li>
				<li><img src="img/ieeecs2.jpg"  alt="" title="IEEE Computury Society" /></li>
            </ul>
        </nav>
        </div>
    </aside>
    <div id="content">
        <article>
            <section>
				<h2><u>SoS Design</u></h2><br>
            
				 
				<ul>
					<li><h3><img src="img/seta.gif"   /> Modeling and simulation</h3></li>
					
				</ul>
				
									
            </section>
            <footer><?php
					// Assumindo que hoje é: March 10th, 2001, 5:16:18 pm

					$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
					
				 ?><span><?php echo $today; ?></span></footer>
        </article>
       
  </div>
  

	</div>
</div>
	</div>
	<div>
	
		
	</div>
	
	

</body>
</html>


