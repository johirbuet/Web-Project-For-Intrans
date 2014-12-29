<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Web Project For Intrans</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
        <script src="js/poll.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jquery.cookie.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
		<div>
			<a href="index.html" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li class="selected">
					<a href="index.html"><span>H</span>ome</a>
				</li>
				<li>
					<a href="about.html"><span>A</span>bout</a>
				</li>
				<li>
					<a href="programs.html"><span>P</span>rograms</a>
				</li>
				<li>
					<a href="blog.html"><span>B</span>log</a>
				</li>
				<li>
					<a href="staff.html"><span>S</span>taff</a>
				</li>
				<li>
					<a href="contact.html"><span>C</span>ontact</a>
				</li>
			</ul>
			<div>
				<p>
					<span>C</span>amp <span>S</span>tarts <span>I</span>n: <span><span>228</span></span> <span>D</span>ays
				</p>
			</div>
		</div>
	</div>
	<div class="body">
		<div>
			<div class="featured">
				<img src="images/camping.jpg" alt="">
				<div>
					<div>
						<h3><span>B</span>E <span>A</span> <span>C</span>AMPER <span>T</span>ODAY!</h3>
						<p>
							You can remove any link to our website from this website template, you're free to use this website template without linking back to us
						</p>
						<a href="register.html">REGISTER NOW!</a>
					</div>
				</div>
			</div>
			<div>
				<div>
					<div>
						<div class="section">
							<h2>WHY CHOOSE US?</h2>
							<p>
								This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a> for you, for free. You can replace all this text with your own text.
							</p>
							<?php
                                                        $ans1=0;
                                                        $ans2=0;
                                                        ?>
						</div>
						<div>
							<h3>Files</h3>
                                                        <ul>
                                                         <?php
                                                         $server="localhost";
                                                         $user="root";
                                                         $password="";
                                                         $dbname="intrans";
                                                         $con=  mysql_connect($server,$user, $password);
                                                         if(!$con)
                                                         {
                                                             die('Could not connect '.  mysql_error());
                                                         } 
                                                         //echo "Connected Succesfully";
                                                         $db=  mysql_select_db($dbname, $con);
                                                         if(!$db){
                                                             echo "Can't get the database";
                                                         }
                                                         $result=  mysql_query("SELECT ID,Name,Date, Privacy FROM file Group By Name");
                                                         while($row=  mysql_fetch_array($result)){
                                                             echo "<li><div>". "<span>".  date("m/d/Y")."</span>"."<p>".$row{'ID'}."\t".$row{'Name'}."\t".$row{'Date'}."\t".$row{'Privacy'}."</p></div></li>";
                                                         }
                                                         $file="FILE.html";
							$doc=new DOMDocument();
                                                        $doc->loadHTMLFile($file);
                                                        $tags=$doc->getElementsByTagName('a');
                                                        
                                                        foreach ($tags as $tag){
                                                           
                                                            $name="<a href='".$tag->getAttribute('href')."' >".$tag->nodeValue."</a>";
                                                            $date=date("m/d/Y");
                                                            $privacy=$tag->getAttribute('title');
                                                            $sql='INSERT INTO file '.'(Name,Date,Privacy) '.
                                                                    'VALUES ("'.$name.'",NOW(),'.'"'.$privacy.'")';
                                                    
                                                            mysql_select_db($dbname,$con);
                                                            $ret=  mysql_query($sql,$con);
                                                            if(!$ret){
                                                                die('Could not enter data'.mysql_error());
                                                            }
                                                               // echo "Data Entered Succesfully";
                                                            
                                                        }
                                                                ?>
                                                        </ul>
							<a href="events.html">View All</a>
                                                        <div id="poll-container">
    <h3>Poll</h3>
    <form id='poll' action="poll.php" method="post" accept-charset="utf-8">
        <p>Pick your favorite Javascript framework:</p>
        <p><input type="radio" name="poll" value="opt1" id="opt1" /><label for='opt1'>&nbsp;jQuery</label><br />
        <input type="radio" name="poll" value="opt2" id="opt2" /><label for='opt2'>&nbsp;Ext JS</label><br />
        <input type="radio" name="poll" value="opt3" id="opt3" /><label for='opt3'>&nbsp;Dojo</label><br />
        <input type="radio" name="poll" value="opt4" id="opt4" /><label for='opt4'>&nbsp;Prototype</label><br />
        <input type="radio" name="poll" value="opt5" id="opt5" /><label for='opt5'>&nbsp;YUI</label><br />
        <input type="radio" name="poll" value="opt6" id="opt6" /><label for='opt6'>&nbsp;mootools</label><br /><br />
        <input type="submit" value="Vote &rarr;" /></p>
    </form>
</div>
						</div>
                                            
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<div>
				<h3>NEWSLETTER</h3>
				<p>
					Nulla porttitor vulputate elit, trist ique malesuada sem.
				</p>
				<form action="index.html">
					<input type="text" value="Email Address" onblur="this.value=!this.value?'Email Address':this.value;" onfocus="this.select()" onclick="this.value='';">
					<input type="submit" value="Get">
				</form>
			</div>
			<div>
				<h4>LATEST BLOG</h4>
				<ul>
					<li>
						<p>
							<a href="blog.html">Phasellus parea ut di tincidunt blandit nisi ut pellentesque.</a>
						</p>
						<span>11/07/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.html">Donec dictum semper augue, ut consectetur magna posuere eget.</a>
						</p>
						<span>11/03/2011</span>
					</li>
					<li>
						<p>
							<a href="blog.html">Cum sociis natoque penatibus et magnis dis parturient.</a>
						</p>
						<span>11/27/2011</span>
					</li>
				</ul>
			</div>
			<div class="connect">
				<h4>FOLLOW US:</h4>
				<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">Facebook</a> <a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">Twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" class="google">Google+</a>
			</div>
		</div>
		<div>
			<p>
				Institute For Transportation &#169; 2011 | All Rights Reserved
			</p>
		</div>
	</div>
</body>
</html>