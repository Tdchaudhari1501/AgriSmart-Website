<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
</head>
<style>
    .btn {
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        border-radius: 4px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .texture {
        background: url(../img/red-bg-texture.png) repeat 0 0;
        padding: 3px 0px 3px 0;
    }

    .heading-texture {
        width: 100%;
        color: rgb(33, 238, 84);
    }

    .container {
        margin-right: 5px;
        margin-left: 5px;
        padding-left: 15px;
        padding-right: 15px;
    }

    .container {
        position: relative;
        margin: 0 auto;
        display: block;
        max-width: 1528px;
    }

    .texture {
        background: url(../img/red-bg-texture.png) repeat 0 0;
        padding: 3px 0px 3px 0;
    }

    .heading-texture {
        width: 100%;
        color: rgb(248, 244, 244);
    }

    body {
        font-size: 16px;
        border: 4px solid;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333333;
        background-color: #ffffff;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        color: #686868;
        font-size: 14px;
        background: #ffffff;
        overflow-x: hidden;
    }

    body {
        font-size: 16px;
        border: 4px solid;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333333;
        background-color: #ffffff;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        color: #686868;
        font-size: 14px;
        background: #ffffff;
        overflow-x: hidden;
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        content: " ";
        display: table;
    }

    .container:before,
    .container:after {
        display: table;
        line-height: 0;
        content: "";
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        content: " ";
        display: table;
    }

    .container:before,
    .container:after {
        display: table;
        line-height: 0;
        content: "";
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-header:after,
    .modal-footer:after {
        clear: both;
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        content: " ";
        display: table;
    }

    .container:after {
        clear: both;
    }

    .container:before,
    .container:after {
        display: table;
        line-height: 0;
        content: "";
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-header:after,
    .modal-footer:after {
        clear: both;
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        content: " ";
        display: table;
    }

    .container:after {
        clear: both;
    }

    .container:before,
    .container:after {
        display: table;
        line-height: 0;
        content: "";
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    ::selection {
        background: rgba(0, 0, 0, .2);
    }

    ::selection {
        background: rgba(0, 0, 0, .2);
    }
</style>

<body>
    <div class="panel panel-primary">
        <div class="container texture heading-texture">
            <div style="float:left;padding:5px">
                <i class="fa fa-newspaper-o fa-lg"></i>
                Notice Board :
            </div>
            <a href="NoticeBoardList.aspx?type=lCxUjNjnTp8=" class="btn" style="color: white; float: right;background-color:#154979;border:1px solid white;margin-right:1%">View
                All</a>
        </div>
        <div class="panel-body" style="height: 450px;background-color:#F3F4F8">
            <marquee behavior="scroll" direction="UP" class="ojas-small" scrolldelay="500" style="height: 100%">

                <div id="noticeboard1_rowScrollingNw">
                    <a href="https://www.bing.com/ck/a?!&&p=99350f334d0e6148JmltdHM9MTcxMzgzMDQwMCZpZ3VpZD0xMDM0OThlYi1hMjgwLTZmM2EtMzFlMi04YTk1YTMzMjZlZjcmaW5zaWQ9NTIxMA&ptn=3&ver=2&hsh=3&fclid=103498eb-a280-6f3a-31e2-8a95a3326ef7&psq=pm+beneficiary+portal&u=a1aHR0cHM6Ly9iZW5lZmljaWFyeS5uaGEuZ292LmluLw&ntb=1"><img src="../img/arrow.gif" style="border:0;">... PM-Kishan benificary list </a> <br><br>
                    <a href=" https://www.bing.com/ck/a?!&&p=99350f334d0e6148JmltdHM9MTcxMzgzMDQwMCZpZ3VpZD0xMDM0OThlYi1hMjgwLTZmM2EtMzFlMi04YTk1YTMzMjZlZjcmaW5zaWQ9NTIxMA&ptn=3&ver=2&hsh=3&fclid=103498eb-a280-6f3a-31e2-8a95a3326ef7&psq=pm+beneficiary+portal&u=a1aHR0cHM6Ly9iZW5lZmljaWFyeS5uaGEuZ292LmluLw&ntb=1"><img src="../img/arrow.gif" style="border:0;">...Know Your pmkishan benficaries status- </a> <br><br>
                    <a href="https://www.bing.com/ck/a?!&&p=9b734561a9027bbcJmltdHM9MTcxMzgzMDQwMCZpZ3VpZD0xMDM0OThlYi1hMjgwLTZmM2EtMzFlMi04YTk1YTMzMjZlZjcmaW5zaWQ9NTIwOQ&ptn=3&ver=2&hsh=3&fclid=103498eb-a280-6f3a-31e2-8a95a3326ef7&psq=kisan+subsidy&u=a1aHR0cDovL3d3dy5wbWtpc2FuLmdvdi5pbi8&ntb=1"><img src="../img/arrow.gif" style="border:0;">...Sprayer dron purchase - </a> <br><br>
                    <a href="https://www.bing.com/ck/a?!&&p=9b734561a9027bbcJmltdHM9MTcxMzgzMDQwMCZpZ3VpZD0xMDM0OThlYi1hMjgwLTZmM2EtMzFlMi04YTk1YTMzMjZlZjcmaW5zaWQ9NTIwOQ&ptn=3&ver=2&hsh=3&fclid=103498eb-a280-6f3a-31e2-8a95a3326ef7&psq=kisan+subsidy&u=a1aHR0cDovL3d3dy5wbWtpc2FuLmdvdi5pbi8&ntb=1"><img src="../img/arrow.gif" style="border:0;">...Solor Systeam subsidies goverment gave 60% of instalment - </a><br><br>
                </div>

            </marquee>
        </div>
    </div>

</body>

</html>