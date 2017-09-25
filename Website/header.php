<html>
    <head>
        <link rel = "stylesheet" href = "main.css" type = "text/css">
    </head>
    <body>
        <div id = "logoBackground">
            <img src ="Images/CAHSI_Logo.png" id = "logo" align = "left">
            <h1 align = "left" id = "siteTitle">&emsp;ABSTRACT
                </br> &emsp;&emsp;&emsp;&emsp; REVIEW 
                </br> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; SYSTEM
            </h1>
        </div>
        <div id = "menuBar">
            <?php include('menu.php');?>
            <h4 align = "right" id = "date">
                <?php 
                    $date = date("l F d, Y");
                    echo " $date ";
                ?>
            </h4>
        </div>
        
    </body>
</html>