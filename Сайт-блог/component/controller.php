<?php

	if(isset($_GET['a']))
	{
		if(file_exists('admin/'.$_GET['a'].'.php'))
		{
			if(isset($_SESSION['type']))
            {
                $type = $_SESSION['type'];
                if($type == 2)
                {
                print '<h2 class ="page-title">'.ucwords(str_replace("_", " ", $_GET['a'])).'</h2>';
			     include('admin/'.$_GET['a'].'.php');
                }
            else
                {
                    print '<span class = "error">*Вы должны залогиниться под администратором чтобы видеть местный контент. </span>';
                    include('public/login.php');
                }
            }
            else
                {
                    print '<span class = "error">*Вы должны залогиниться под администратором чтобы видеть местный контент. </span>';
                    include('public/login.php');
                }
            
           
		}
		else
		{
			print '<h2 class ="page-warning">Ошибка доступа</h2>';
			include('warning.php');
		}
	}

	else if(isset($_GET['p']))
	{
/*====== For login validation && mantain login and logout delay...=====*/
        if($_GET['p'] == "login")
        {
          if(isset($_POST['btnLogin']))
          { if(isset($_SESSION['type']))
              { print '<span class="successMessage">Удачный вход</span>'; }
              else
              {  print '<span class = "error">Неудачный вход</span>';
                 include ('public/login.php');  }
          }
            else {
                include ('public/login.php');
            }
        }
/*======================== Validation END ============================*/      
           
		else if(file_exists('public/'.$_GET['p'].'.php'))
		{
			print '<h2 class = "page-title">'.ucwords(str_replace("_", " ", $_GET['p'])).'</h2>';
			include('public/'.$_GET['p'].'.php');
		}
		else
		{
			print '<h2 class ="page-warning">Ошибка доступа</h2>';
			include('warning.php');
		}
	}
	else
	{
		print '<h2 class ="page-title">Домостраница</h2>';
		include('home.php');
	}
		

?>
