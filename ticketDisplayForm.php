
<?php
include("./ticketDisplayScript.php");
?>

<html lang="en"
      <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                            <li><a href="ticketDisplayForm.php">Check a Ticket Status</a></li>
                            <li><a href="">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row" style="padding-top: 100px">            
        </div>
        <div class="navigation">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-2">
                        <h1>My Tickets</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ticket No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Priority</th>
                                    <th>Department</th>
                                    <th>Status</th>
                                </tr>
                            <tbody>
                                <?php
                                while ($row = mysql_fetch_assoc($result)) {
                                    $ticket_id = $row["ticket_id"];
                                    $title = $row["ticket_title"];
                                    $desc = $row["ticket_description"];
                                    $priority = $row["priority_level"];
                                    $dept_id = $row["dept_id"];
                                    $tkt_status=$row["tkt_status"];
                                    ?>
                                    <tr>
                                        <td><?php echo $ticket_id; ?></td>
                                        <td><?php echo $title; ?></td>
                                        <td><?php echo $desc; ?></td>
                                        <td><?php echo $priority; ?></td>
                                        <td><?php echo $dept_id; ?></td>
                                        <td><?php echo $tkt_status;?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>


<?php
?>

