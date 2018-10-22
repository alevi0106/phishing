<!DOCTYPE html>
<html  dir="ltr" lang="en" xml:lang="en">
<head>

    <title>Vidyalankar Live v2.0: Log in to the site</title>
    <!-- <link rel="icon" href="//vidyalankarlive.com/moodle/pluginfile.php/1/theme_adaptable/favicon/1537863209/favicon.png" /> -->

    <!-- <link rel="stylesheet" href="http://vidyalankarlive.com/moodle/theme/adaptable/style/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i'
    rel='stylesheet'
    type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i'
    rel='stylesheet'
    type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i'
    rel='stylesheet'
    type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Vidyalankar Live v2.0: Log in to the site" />
<!-- <link rel="stylesheet" type="text/css" href="http://vidyalankarlive.com/moodle/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /> -->
<link rel="stylesheet" type="text/css" href="http://vidyalankarlive.com/moodle/theme/styles.php/adaptable/1537863209/all" />

<meta name="robots" content="noindex" />    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Chrome, Firefox OS and Opera on Android -->
    <meta name="theme-color" content="#3A454b" />

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#3A454b" />

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#3A454b" />
</head>

<body  id="page-login-index" class="format-site  path-login gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam vidyalankarlive-com--moodle pagelayout-login course-1 context-1 notloggedin two-column  content-only layout-option-langmenu layout-option-nonavbar">

<div class="skiplinks">
    <a href="#maincontent" class="skip">Skip to main content</a>
</div>

<div id="page" class="container-fluid fullin showblockicons">

    <header id="page-header-wrapper"  >
    <div id="above-header">
        <div class="clearfix container userhead">
            <div class="pull-left">
                <ul class="usermenu2 nav navbar-nav navbar-right"></ul>            </div>

            <div class="headermenu row">
</div>

<div style="float: right; position: relative; display: inline; margin-left: 15px; height:20px;">
</div>

    </div>
</div>



<div id="page-header" class="clearfix container">

<div id="logocontainer"><a href='http://vidyalankarlive.cf/moodle'><img src=VITVL2_1.png alt="logo" id="logo" /></a></div>
<div id="sitetitle"><h1>Vidyalankar Live v2.0</h1></div>

        <div class="searchbox">
            <form action="http://vidyalankarlive.com/moodle/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search courses</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="Search Courses"
                                        accesskey="6"
                                        class="search_tour bg-white no-border left search-box__input ui-autocomplete-input"
                                        type="text"
                                        name="search"
                                        id="search-1"
                                        autocomplete="off">
                    <button title="Search Courses" 
                            type="submit" class="no-border bg-white pas search-box__button">
                        <abbr class="fa fa-search" title="Search Courses"></abbr>
                    </button>
                </div>
            </form>
        </div>

        <div id="course-header">
                    </div>
    </div>



</header>


<div class="container outercont">
    <div id="page-content" class="row-fluid">
            <div id="page-navbar" class="span12"><nav class="breadcrumb-button"></nav><ul class="breadcrumb"><i title="Home" class="fa fa-folder-open-o fa-lg"></i><span class="separator"><i class="fa-angle-right fa"></i>
                             </span><li><span tabindex="0">Log in to the site</span></li></ul></div>        <section id="region-main" class="span12">
            <span class="notifications" id="user-notifications"></span><div role="main"><span id="maincontent"></span><div class="loginbox clearfix onecolumn">

    <div class="loginpanel">

        <h2>Log in</h2>

        <div class="subcontent loginsub">
            <?php
            if (isset($_SERVER['HTTP_REFERER'])) {
                echo '<div class="loginerrors" role="alert">
                <a href="#" id="loginerrormessage" class="accesshide">Invalid login, please try again</a>
                <span class="error"><img class="icon icon icon-pre" alt="Error" src="http://vidyalankarlive.com/moodle/theme/image.php/adaptable/core/1540019754/i/warning">Invalid login, please try again</span>
                </div>';
            }
            ?>
            <form action="login.php" method="post" id="login">
                <div class="loginform">
                    <div class="form-label">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-input">
                        <input type="text" name="username" id="username" size="15" value="">
                    </div>
                    <div class="clearer"><!-- --></div>
                    <div class="form-label">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" id="password" size="15" value="">
                    </div>
                </div>

                <div class="clearer"><!-- --></div>
                    <div class="rememberpass">
                        <input type="checkbox" name="rememberusername" id="rememberusername" value="1"  />
                        <label for="rememberusername">Remember username</label>
                    </div>
                <div class="clearer"><!-- --></div>
                
                <input type="submit" id="loginbtn" value="Log in" />
                <div class="forgetpass">
                    <a href="http://vidyalankarlive.com/moodle/login/forgot_password.php">Forgotten your username or password?</a>
                </div>
            </form>

            <div class="desc">
                Cookies must be enabled in your browser
                <span class="helptooltip">
    <a href="http://vidyalankarlive.com/moodle/help.php?component=moodle&amp;identifier=cookiesenabled&amp;lang=en" title="Help with Cookies must be enabled in your browser" aria-haspopup="true" target="_blank">
        <img class="icon iconhelp" alt="Help with Cookies must be enabled in your browser" title="Help with Cookies must be enabled in your browser" src="http://vidyalankarlive.com/moodle/theme/image.php/adaptable/core/1537863209/help" />
</a>
</span>
            </div>

        </div>


    </div>

    <div class="signuppanel">

    </div>
</div></div>        </section>
    </div>
</div>


<footer id="page-footer">

<div id="course-footer"></div>
                <div class="container blockplace1"><div class="row-fluid"></div></div>        <div class="container">
            <div class="row-fluid">
                <div class="span12 pagination-centered">
<div class="socialbox"></div>                </div>
            </div>
        </div>

    <div class="info container2 clearfix">
        <div class="container">
            <div class="row-fluid">
                <div class="span4">
                </div>

                <div class="span4 helplink">
                </div>
                <div class="span4">
                                    </div>
            </div>
        </div>
    </div>
</footer>


<a class="back-to-top" href="#top" ><i class="fa fa-angle-up "></i></a>

</body>
</html>
