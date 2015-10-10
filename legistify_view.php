<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"> <!--<![endif]-->  
<head>
    <base href="<?php echo base_url(); ?>"></base>
    <title>Legistify</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href=" assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href=" assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href=" assets/css/headers/header-v6.css">    
    <link rel="stylesheet" href=" assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href=" assets/plugins/animate.css">
    <link rel="stylesheet" href=" assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href=" assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href=" assets/plugins/bxslider/jquery.bxslider.css">
    <link rel="stylesheet" href=" assets/plugins/fancybox/source/jquery.fancybox.css"> 
    <link rel="stylesheet" href=" assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    <link rel="stylesheet" href=" assets/plugins/image-hover/css/img-hover.css">

    <link rel="stylesheet" href=" assets/css/theme-colors/red.css"/>
    <!-- CSS Customization -->
    <link rel="stylesheet" href=" assets/css/custom.css">
    
</head> 
<body>
<div class="wrapper">
 <div class="container">
 
             <?php 
               $i=1;
               foreach ($data->result() as $row) {
                
               echo '
                <div class="panel panel-blue margin-bottom-40">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-tasks"></i>Query'.$i.'</h3>
                    </div>
                    <div class="panel-body">                                                      
                        <form class="margin-bottom-40" action="Legistify/processform/'.$row->id.'" role="form" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="mail'.$row->id.'" value="'.$row->email.'">
                            <div class="form-group">
                                <label>User Query</label><label style="float:right">'.$row->time.'</label>
                                <textarea class="form-control" rows="5" readonly>'.$row->message.'</textarea>
                            </div>
                            <div class="form-group">
                                <label>Your reply</label>
                                <textarea class="form-control" name="msg'.$row->id.'"  placeholder="Enter Text" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Upload attachment(Only doc file allowed)</label>
                                <input type="file" name="upload'.$row->id.'" class="form-control" >
                            </div>


                            <button type="submit" class="btn-u btn-u-blue">Submit</button>
                        </form>
                    </div>
                </div>' ;
                $i++;
               } 
             ?>   
  </div>             
</div>
<!-- JS Global Compulsory -->           
<script type="text/javascript" src=" assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src=" assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src=" assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src=" assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src=" assets/plugins/jquery.easing.min.js"></script>
<script type="text/javascript" src=" assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src=" assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src=" assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src=" assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src=" assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src=" assets/plugins/image-hover/js/touch.js"></script>
<script type="text/javascript" src=" assets/plugins/image-hover/js/modernizr.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src=" assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src=" assets/js/app.js"></script>
<script type="text/javascript" src=" assets/js/plugins/fancy-box.js"></script>
<script type="text/javascript" src=" assets/js/plugins/revolution-slider.js"></script>

<script src="assets/plugins/scroll/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll/js/scrolling-nav.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        FancyBox.initFancybox();
        RevolutionSlider.initRSfullWidth();
    });
</script>




</body>
</html> 
