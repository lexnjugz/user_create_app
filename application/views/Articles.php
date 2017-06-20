<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="lexnjugz">
    <meta name="keyword" content="">


    <title>App</title>


    <!--common style-->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sticky-header">

    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="#">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">App</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                   
                   <li> <?php echo anchor('Dashboard','Create User') ?></li>
                   <li> <?php echo anchor('List_users','Users') ?></li>
                   <li> <?php echo anchor('User_articles','Articles') ?></li>
                           
                </ul>
                <!--sidebar nav end-->

                
            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1000px;">

            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">  
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">App</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="index.html">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                

            </div>
            <!-- header section end-->

            <!-- page head start-->
            <div class="page-head">
                <h3 class="m-b-less">
                    Users
                </h3>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

            <div class="row">
            <div class="col-lg-12">
            <section class="panel">
            <table class="table table-striped custom-table table-hover">
                <thead>
                <tr>
                    <th style="visibility:hidden;">id</th>
                    <th><i class="fa fa-bookmark-o"></i> User ID</th>
                    <th class="hidden-xs"><i class="fa fa-file-photo-o"></i> Image</th>
                    <th class="hidden-xs"><i class="fa fa-building-o"></i> Content</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th class="hidden-xs"><i class="fa fa-cogs"></i> Action</th>
                </tr>
                </thead>
                <tbody>
<?php $data1="Approve"; $data2="Deny"; ?>
                <?php foreach($result as $row):?>
                <tr>
                <td style="visibility:hidden;"><?=$news_id=$row->news_id?></td>
                    <td><?=$user_id=$row->user_id?></td>
                    <td><?=$image=$row->image?></td>
                    <td><?=$content=$row->content?></td>
                    
                    <td>
                    <span class="label label-info label-mini"><?=$status=$row->status?></span></td>
                    <td class="hidden-xs">
                    <?php echo anchor('User_articles/user_update/'.$row->news_id.'/'.$data1,' Approve',['class'=>'btn btn-success btn-xs fa fa-check', 'role'=>'button', 'id'=>'Approve', 'value'=>'Approve'])?>
                    <?=anchor('User_articles/user_update/'.$row->news_id.'/'.$data2,' Deny',['class'=>'btn btn-danger btn-xs fa fa-trash-o', 'role'=>'button','id'=>'Deny', 'value'=>'Deny','onclick'=>'return confirm(\'Are you sure?\')'])?>
                    </td>
                </tr><?php endforeach;?>

                </tbody>
            </table>
            </section>
            </div>
            </div>
           
            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2016 &copy; App.
            </footer>
            <!--footer section end-->


        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-migrate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/flot-chart/jquery.js"></script>


<!--common scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>


</body>
</html>
