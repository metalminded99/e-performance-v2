<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IntelliCare ePerformance<?php echo isset( $title ) ? ' | '.$title : ''; ?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow" />
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo CSS_DIR; ?>validationEngine.jquery.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo BOOTSTRAP_DIR; ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BOOTSTRAP_DIR; ?>css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_DIR; ?>theme.css">
    <link rel="stylesheet" href="<?php echo FONT_DIR; ?>css/font-awesome.css">
    <link href="<?php echo CSS_DIR; ?>jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="<?php echo JS_DIR; ?>jquery-1.9.0.min.js" type="text/javascript" language="javascript"></script>
    <script type="text/javascript">
        var base_url = '<?php echo base_url();?>';
    </script>
    <script src="<?php echo JS_DIR; ?>jquery-ui-1.10.2.custom.min.js" type="text/javascript" language="javascript" charset="utf-8"></script>
    <script src="<?php echo JS_DIR; ?>jquery.validationEngine-en.js" type="text/javascript" language="javascript" charset="utf-8"></script>
    <script src="<?php echo JS_DIR; ?>jquery.validationEngine.js" type="text/javascript" language="javascript" charset="utf-8"></script>
    <script src="<?php echo CKEDITOR_DIR; ?>ckeditor.js" type="text/javascript" language="javascript"></script>
    <script src="<?php echo BOOTSTRAP_DIR; ?>js/bootstrap.js"></script>
    <script src="<?php echo BOOTSTRAP_DIR; ?>js/bootstrap-datetimepicker.min.js"></script>
    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!--[if lt IE 9]>
      <script src="<?php echo JS_DIR; ?>html5.js"></script>
    <![endif]-->

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->