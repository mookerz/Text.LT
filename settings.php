<?php include 'common.php' ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit"/>
    <meta name="keywords" content="<?=$keywords?>" />
    <meta name="description" content="<?=$description?>" />
    <meta name="author" content="<?=$author?>" />
    <title>Settings|Text.LT - Light Text</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

    <link href="./css/clean-blog.css" rel="stylesheet">
    <link href="./css/sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <?php require 'navbar.php' ?>
        <!--/.nav-collapse -->
    </div>
</nav>


<!-- Begin page content -->

<div class="container-first">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Settings</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>02/01 7:33PM</td>
                    <td>System Architect</td>
                </tr>
                <tr>
                    <td>01/01 7:33PM</td>
                    <td>Accountant</td>
                </tr>
                <tr>
                    <td>2016/12/01 7:33PM</td>
                    <td>San Francisco</td>
                </tr>
                <tr>
                    <td>2017/01/01 7:33PM</td>
                    <td>Edin xt.LT (Light-Text) is an experiment project to implements the basic function of EverNotes.
                        Due to the limitation on editing RTF text, we have cr xt.LT (Light-Text) is an experiment
                        project to implements the basic function of EverNotes. Due to the limitation on editing RTF
                        text, we have crburgh
                    </td>
                </tr>
                <tr>
                    <td>2017/01/01 7:33PM</td>
                    <td>Accountant</td>
                </tr>
                <tr>
                    <td>2017/01/01 7:33PM</td>
                    <td>Integration Specialist</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Analysis</h2>
            <p>Last login time: 2017-01-01. Last login IP: 888.888.888. Your current account: xxx@gmail.com</p>
            <p>You are out member since 2017-01-01. Thank you for your supports!</p>
        </div>
    </div>
</div>


<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Location</h3>
                    <p>University of Missouri
                        <br>N52 Memorial Union
                        <br>Columbia, MO 65211 USA</p>
                </div>
                <div class="col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x text-primary"></i>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x text-primary"></i>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline">
                            <span class="fa-stack fa-2x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-wordpress fa-stack-1x text-primary"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>About Service</h3>
                    <p>Hosting by GoDaddy
                        <br>CDN provided by CloudFlare
                        <br>Other services by Google
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!--  	<footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer> -->


<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
        <p>Copyright © gTerminal 2017</p>
    </div><!--/.nav-collapse -->
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
    var table = $('#example').DataTable(
        {
        paging: false,
        bFilter: false,
        bInfo: false,
        "bJQueryUI": true, //Enable smooth theme
        "sPaginationType": "full_numbers", //Enable smooth theme
        "sDom": 'lfrtip'
        }
    );

} );

</script>

</body>
</html>


