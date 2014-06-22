<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>浙江富康工贸公司————error</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Le styles -->
    <link href="/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/css/icons.css" rel="stylesheet" type="text/css" />

    <!-- Main stylesheets -->
    <link href="/css/main_2.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!-- [if lt IE 9]> -->
      <script src="/js/html5.js"></script>
    <!-- <![endif] -->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="/images/apple-touch-icon-57-precomposed.png" />

    </head>

    <body class="errorPage">

    <div class="container-fluid">

        <div class="errorContainer">
            <div class="page-header">
                <h1 class="center">503 <small>ERROR.</small></h1>
            </div>

            <h2 class="center"><?php echo nl2br(CHtml::encode($data['message'])); ?></h2>

            <div class="center">
                <a href="javascript: history.go(-1)" class="btn" style="margin-right:10px;"><span class="icon16 icomoon-icon-arrow-left-10"></span>返回上一页</a>
                <a href="/" class="btn"><span class="icon16 icomoon-icon-screen"></span>首页</a>
            </div>

        </div>

    </div><!-- End .container-fluid -->

    <!-- Le javascript
    ================================================== -->
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript">
        // document ready function
        $(document).ready(function() {
            //------------- Some fancy stuff in error pages -------------//
            $('.errorContainer').hide();
            $('.errorContainer').fadeIn(1000).animate({
                'top': "50%", 'margin-top': +($('.errorContainer').height()/-2-30)
                }, {duration: 750, queue: false}, function() {
                // Animation complete.
            });
        });
     </script>

    </body>
</html>
