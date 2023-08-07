<?php
						if(isset($_POST["signup"])) 
											{
												$fn=$_POST['fname'];
												$ln=$_POST['lname'];
												$e=$_POST['email'];
												$m=$_POST['mob'];
												$p=$_POST['pwd'];
												
												$c=mysql_connect("localhost","root","");
												
												
	
											mysql_select_db("hitech",$c);
													
												$ins="insert into registration values('$fn','$ln','$e',$m,'$p')";
												echo "<p><h1 style='color:red'>$fn</h1></p>";				
												echo "<p><h1 style='color:red'>$ln</h1></p>";				
												echo "<p><h1 style='color:red'>$e</h1></p>";				
												echo "<p><h1 style='color:red'>$m</h1></p>";				
												echo "<p><h1 style='color:red'>$p</h1></p>";

												
												if(mysql_query($ins)) 
												{
												
													
													echo "<script>alert(Record inserted successfully)</script>";
													echo '<script language="javascript">';
													echo 'alert("Sign Up Successfully")';
													echo '</script>';
													echo "successfull";
												}
												else {
													echo '<script language="javascript">';
													echo 'alert(mysql_error())';
													echo '</script>';
													echo "failed";
						
												}
												
																		}
		 ?>