<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
                <a href="index.html">
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
                        <span class="brand-name">App</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="#">   
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
                    Registration Form
                </h3>

            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <div class="panel-body">
                                <div class="form">
                                    <?php echo form_open_multipart('Dashboard/new_user_registration'); ?>
                                    <form class="cmxform form-horizontal tasi-form validate" id="signupForm" method="post" enctype="multipart/form-data" data-success="Sent! Thank you!">
                                        <div class="form-group ">
                                            <label for="firstname" class="control-label col-lg-2">Firstname *</label>
                                            <div class="col-lg-10">
                                                 <input class="form-control" id="firstname" name="firstname" type="text" value="" required />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="lastname" class="control-label col-lg-2">Lastname  *</label>
                                            <div class="col-lg-10">
                                                <input class=" form-control" id="lastname" name="lastname" type="text" value="" required />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="phone" class="control-label col-lg-2">Phone *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="phone" name="phone" minlength="2" type="text" value="" required />
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> 
                                           <?php $options = array(
                                                'Baringo'         => 'Baringo',
                                                'Bomet'           => 'Bomet',
                                                'Bungoma'         => 'Bungoma',
                                                'Busia'           => 'Busia',
                                                'Elgeyo-Marakwet' => 'Elgeyo-Marakwet',
                                                'Embu'            => 'Embu',
                                                'Garissa'         => 'Garissa',
                                                'HomaBay'         => 'HomaBay',
                                                'Isiolo'          => 'Isiolo',
                                                'Kajiado'         => 'Kajiado',
                                                'Kakamega'        => 'Kakamega',
                                                'Kericho'         => 'Kericho',
                                                'Kiambu'          => 'Kiambu',
                                                'Kilifi'          => 'Kilifi',
                                                'Kirinyaga'       => 'Kirinyaga',
                                                'Kisii'           => 'Kisii',
                                                'Kisumu'          => 'Kisumu',
                                                'Kitui'           => 'Kitui',
                                                'Kwale'           => 'Kwale',
                                                'Laikipia'        => 'Laikipia',
                                                'Lamu'            => 'Lamu',
                                                'Machakos'        => 'Machakos',
                                                'Makueni'         => 'Makueni',
                                                'Mandera'         => 'Mandera',
                                                'Meru'            => 'Meru',
                                                'Migori'          => 'Migori',
                                                'Marsabit'        => 'Marsabit',
                                                'Mombasa'         => 'Mombasa',
                                                'Muranga'         => 'Muranga',
                                                'Nairobi'         => 'Nairobi',
                                                'Nakuru'          => 'Nakuru',
                                                'Nandi'           => 'Nandi',
                                                'Narok'           => 'Narok',
                                                'Nyamira'         => 'Nyamira',
                                                'Nyandarua'       => 'Nyandarua',
                                                'Nyeri'           => 'Nyeri',
                                                'Samburu'         => 'Samburu',
                                                'Siaya'           => 'Siaya',
                                                'Taita-Taveta'    => 'Taita-Taveta',
                                                'TanaRiver'       => 'TanaRiver',
                                                'Tharaka-Nithi'   => 'Tharaka-Nithi',
                                                'Trans-Nzoia'     => 'Trans-Nzoia',
                                                'Turkana'         => 'Turkana',
                                                'UasinGishu'      => 'Uasin-Gishu',
                                                'Vihiga'          => 'Vihiga',
                                                'Wajir'           => 'Wajir',
                                                'WestPokot'       => 'WestPokot'
                                                ); ?><span class="caret"></span></button>
                                        </div>
                                        <div class="form-group ">
                                            <label for="password" class="control-label col-lg-2">Password *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control " id="password" name="password" type="password" value="" required />
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <label for="email" class="control-label col-lg-2">Email *</label>
                                            <div class="col-lg-10">
                                                <input class="form-control required" value="" id="email" name="email" type="email" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="file">Profile Pic</label>
                                            <input id="profile_pic" name="profile_pic" class="file" type="file" value="upload" multiple=true>

                                            <p class="help-block">The Pic should not exceed 10Mbs.</p>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-success" type="submit">Save</button>
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php form_close(); ?>
                                    <?php
                                    if (isset($success)){ echo "<div>" . $success . "</div>";}
                                    ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                2016 &copy; App by Lexnjugz.
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

<!--right slidebar-->
<script src="<?php echo base_url(); ?>assets/js/slidebars.min.js"></script>


<!--form validation-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>

<!--form validation init-->
<script src="<?php echo base_url(); ?>assets/js/form-validation-init.js"></script>


<!--common scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

</body>
</html>
