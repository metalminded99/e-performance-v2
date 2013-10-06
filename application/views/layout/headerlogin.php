<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>IntelliCare ePerformance<?php echo isset( $title ) ? ' | '.$title : ''; ?></title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo CSS_DIR; ?>validationEngine.jquery.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font/css/font-awesome.css">
    <script type="text/javascript">
        var base_url = '<?php echo base_url();?>';
    </script>
    <script src="<?php echo JS_DIR; ?>jquery-1.8.1.min.js" type="text/javascript" language="javascript"></script>
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