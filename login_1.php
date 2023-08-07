<?php
						session_start();
						include 'connect.php';
						if(isset($_POST['login']))
						{
							$flag=0;
							$mal=$_POST['email'];
							$pas=$_POST['passwords'];
							$qu="select * from registration ";
			
							$res=mysql_query($qu);
							$_SESSION['query']="test query";
							/*$row=mysql_fetch_row($res);
							
							$_SESSION['query']=$qu;
							
							if ($row != null) 
							{
									$_SESSION['login_user']=$mal;
									$_SESSION['msg']="you have logged in ";
									header("location:login.php");
							}
							else
							{
								$_SESSION['msg_1']="Not verified account please create an account!";
									echo "<p><h1 style='color:red'>Not a valid user</h1></p>";
									$_SESSION['msg']="Not a valid user ";
									header("location:login.php");
									 
							}*/
							
							
							while($row=mysql_fetch_array($res))
							{
								if($row['email']==$mal and $row['password']==$pas)
								{
									$flag=1;
									$_SESSION['login_user']=$mal;
									$_SESSION['msg']="you have logged in ";
									header("location:login.php");
								}
							}
							if($flag==0)
								{
									$_SESSION['msg_1']="Not verified account please create an account!";
									echo "<p><h1 style='color:red'>Not a valid user</h1></p>";
									header("location:login.php");
								}
							}
							
						
							
							
						?>