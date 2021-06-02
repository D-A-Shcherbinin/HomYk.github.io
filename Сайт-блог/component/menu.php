<ul>
	

	<?php
				$sql = "select id, name from category where categoryId = 0";
				$table = mysqli_query($cn, $sql);
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<li><a href="?p=article&ctg='.$row["id"].'">'.$row["name"].'</a>';
					findChild($row["id"]);
					print '</li>';
				}
	?>

 <?php
    
    if(isset($_SESSION['type']))
    {
        $type = $_SESSION['type'];
        if($type == 1)
        {
//          print '<li><a href="?p=article&ctg='.$row["id"].'">'.$row["name"].'</a></li>';
            print '<li><a href="?p=profile">'.$_SESSION['name'].'</a></li>
            <li><a href="?p=logout">Выход</a></li>';
        }
        elseif($type == 2)
        {
            print '<li><a href="#">Admin <i class ="fa fa-arrow-down"></i></a>
                <ul>
                    <li><a href="?a=category">Категории</a></li>
                    <li><a href="?a=pages">Посты</a></li>
                    <li><a href="?a=users">Пользователи</a></li>
                    <li><a href="?a=page_image">Изображения</a></li>
                    <li><a href="?a=page_file">Файлы</a></li>
                </ul>
            </li>
            <li><a href="?a=profile">'.$_SESSION['name'].'</a></li>
            <li><a href="?p=logout">Выход</a></li>';
        }

    }
    else
    {
        print '<li><a href="?p=registration" class = "reg-btn"><i class = "fa fa-user-plus reg-icon"></i>Регистрация</a></li>
        <li><a href="?p=login"><i class = "fa fa-sign-in login-icon"></i>Авторизация</a></li>';
    }

    
 ?>
</ul>


<?php
function findChild($pid)
{
	global $cn;
	$sql = "select id, name from category where categoryId = ".$pid;
	$table = mysqli_query($cn, $sql);
				
	print '<ul>';
	while($row = mysqli_fetch_assoc($table))
	{
		print '<li><a href="?p=article&ctg='.$row["id"].'">'.$row["name"].'</a>';
		findchild($row["id"]);
		print '</li>';
	}
	print '</ul>';
}


?>
