
<html>
    <head>
        <link rel = "stylesheet" href = "main.css" type = "text/css">
    </head>
    <body>
        <?php 
            if(false){//FIXME
                $adminBar = '<ul id = "menu">
                    <li class = "menuItem"><a href = "reports.php">Reports</a></li>
                    <li class = "menuItem"><a href = "contact.php">Contact</a></li>
                    <li class = "menuItem"><a href = "control.php">Control</a></li>
                </ul>';
                echo $adminBar;
            }
            else{
                $userBar = '<ul id = "menu">
                    <li class = "menuItem"><a href = "submitAbstract.php">Submit an Abstract</a></li>
                    <li class = "menuItem"><a href = "reviewStatus.php">Review Your Status</a></li>
                    <li class = "menuItem"><a href = "guidelines.php">Guidelines</a></li>
                    <li class = "menuItem"><a href = "about.php">About</a></li>
                </ul>';
                echo $userBar;
            }
    
        ?>
    </body>
</html>
