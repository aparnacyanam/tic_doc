
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TicDoc</title>
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
    <body>
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

        <div class="row" style="padding-top: 100px">            
        </div>
        <div class="row">   
            <div class="container">
                <h2>Create a Ticket</h2>
            </div>
        </div>
        <div class="row wrapper">
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="col-sm-6">
                            <form action="createTicketScript.php" class="form-signin" method="post" role="form">
                                <div class="form-group">
                                    <label for="inputTicketTitle">Ticket Title</label>
                                    <input type="text" class="form-control" name="title" size="51" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Ticket Description</label>
                                    <textarea class="form-control" rows="4" cols="40" name="description" required></textarea>
                                </div>
                                <div class="form-inline">
                                    <label for="inputPriority" class="control-label">Priority</label>                   
                                    <input class="form-control" type="RADIO" name="urgency" value="3" checked> Low  
                                    <input class="form-control" type="RADIO" name="urgency" value="2"> Medium
                                    <input class="form-control"  type="RADIO" name="urgency" value="1"> High                   
                                </div>
                                <div class="form-inline">
                                    <label for="inputDepartment" class="control-label">Department</label>
                                    <select class="form-inline" name="departments">
                                        <option value="1" SELECTED>Human Resources</option>
                                        <option value="2">Finances</option>
                                        <option value="3">Software Maintenance</option>
                                        <option value="4">Networking Administration</option>
                                        <option value="5">Sales</option>                                        
                                    </select>              
                                </div><br><br>
                                <center><input class="btn btn-primary" type="submit" value="Submit Ticket"></center>
                            </form>
                        </div
                        <div class="col-sm-6">
                            <div class="container">
                                <img src="img/Create ticket.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>                          
        </div>
    </body> 
</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>