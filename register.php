
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TicDoc</title>
        <meta name="description" content="">
        <meta name="author" content="">


        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <style type="text/css">
            
            .row {
                margin-right: -10px;
                margin-left: -10px;
            }

            .sidebar {
                min-height: 500px;
            }
            .loginbackground{
                margin: 0;
                background: url('img/IT_Support.jpg');
                background-size: 1160px 707px;
                background-repeat:no-repeat;
            }
            .logindiv{
                height: 800px;
            }
            .loginposition{
                padding-top: 200px;
            }
            .fontcolorwhite{
                color: whitesmoke;
            }

        </style>

    </head>
    <body class="loginbackground">
        <div class="row">
            <nav class="navbar navbar-inverse navbar-fixed-top" >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="index.php">TicDoc
                                <small> - An Online Ticketing System</small>
                            </a> 
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" >

                        <ul class="nav nav-pills pull-right">
                            <li ><a href="index.php">Sign in</a></li>
                            <li ><a href="">Create a Ticket</a></li>
                            <li><a href="">Check a Ticket Status</a></li>
                            <li><a href="">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
<!--        <div class="container">

            <div class="content">
                <div class="row">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="">
                            <fieldset>
                                <div class="clearfix">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="clearfix">
                                    <input type="password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary" type="submit">Sign in</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
<div class="row">
<div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-sm-4 pull-left logindiv" >
                            <div class="loginposition">
                                <form class="form-signin" action="login.php"  method="post">       
                                    <h2 class="form-signin-headin">Register</h2>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail" required=""/>
                                    <input type="text" class="form-control" name="username" placeholder="Username" required=""/>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required=""/> 
                                    
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    </body>
</html>