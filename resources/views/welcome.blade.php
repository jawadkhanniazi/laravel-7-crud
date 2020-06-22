<!DOCTYPE html>
<!-- saved from url=(0044)https://cuonline.ciitwah.edu.pk:8089/COURSES -->
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <title>CUOnline Student Portal</title>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://cuonline.ciitwah.edu.pk:8089/Content/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://cuonline.ciitwah.edu.pk:8089/Content/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://cuonline.ciitwah.edu.pk:8089/Content/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://cuonline.ciitwah.edu.pk:8089/Content/img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="https://cuonline.ciitwah.edu.pk:8089/Content/img/fav.png">

    <link href="./CUOnline Student Portal_files/bootstrap.css" rel="stylesheet">
<link href="./CUOnline Student Portal_files/style.css" rel="stylesheet">
<link href="./CUOnline Student Portal_files/style_cuonline_portal.css" rel="stylesheet">
 

    <script src="./CUOnline Student Portal_files/jquery-1.10.2.js.download"></script><style></style>
<script src="./CUOnline Student Portal_files/bootstrap.js.download"></script>

    
    <script src="./CUOnline Student Portal_files/html5shiv.js.download"></script>
<script src="./CUOnline Student Portal_files/less-1.3.3.js.download"></script>
<script src="./CUOnline Student Portal_files/MenuActivation.js.download"></script>
 

<style>
    .main_body .content_area {
        padding: 0 0 10px 0;
        margin: 10px 0;
    }

        .main_body .content_area .title_search_area {
            border-radius: 0;
        }

    .question_box h3 {
        margin: 50px 0;
        text-align: center;
        font-size: 30px;
    }


</style></head>



<body style="">
    <script>

        //paste this code under the head tag or in a separate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>

    <div class="container">
<header>
    <div class="row clearfix top_row">
        <div class="inner_row">
            <div class="col-md-12 column">
                    <span title="Jawad Abbas Khan S/D/O Riaz Khan" class="label label-default label_without_bg"><b>Welcome : CIIT/FA17-BSE-078/WAH</b></span>
            </div>
        </div>
    </div>
    <div class="row clearfix logo_menu_row">
        <div class="inner_row">
            <div class="col-md-4 column logo">
                <div>
                    <img alt="100x100" src="./CUOnline Student Portal_files/logo_with_text.png">
                </div>
            </div>
            <div class="col-md-6 column rounded_menu_boxes">
                <ul class="pull-right">
                    <li><a title="Home" class="home  selected" id="Dash_Board" href="https://cuonline.ciitwah.edu.pk:8089/Courses/Index">Dashboard</a><span></span></li>
                    <li><a title="Course Registration Card" class="regCard" id="Registration_Card" href="https://cuonline.ciitwah.edu.pk:8089/RegistrationCard/Index">Registration Card</a><span></span></li>
                                        <li><a title="Student Fees" class="fees" id="Fees" href="https://cuonline.ciitwah.edu.pk:8089/Fees/Index">Fees</a><span></span></li>
                    <li><a title="Result Card" class="marks" id="Result_Card" href="https://cuonline.ciitwah.edu.pk:8089/ResultCard/Index">Result Card</a><span></span></li>
                    <li><a title="My Profile" class="attndnce" id="My_Profile" href="https://cuonline.ciitwah.edu.pk:8089/Profile/Index">Profile</a><span></span></li>
                    
                    <li><a title="Logout" class="reports" id="Sign_Out" href="https://cuonline.ciitwah.edu.pk:8089/Login/Sign_out">Logout</a><span></span></li>
                </ul>
            </div>
            <div class="col-md-2 column " style="padding-right:0">
                <script language="javascript" type="text/javascript">
                    $(document).ready(function () {
                        $("#divImageHolder").addClass("StudentPictureSpinner");
                        var imageUrl = "/Login/GetBase64Image";
                        $.ajax({
                            cache: false,
                            type: "GET",
                            url: imageUrl,
                            contentType: 'application/json',
                            dataType: "json",
                            success: function (data) {
                                //debugger;
                                $("#divImageHolder").removeClass("StudentPictureSpinner");
                                var image = data.base64image;
                                if (image.length > 0) {
                                    $("#divImageHolder").html("<img  style='float:right' src='data:image/jpg;base64," + image + "'/>");
                                }
                                else {
                                    $("#divImageHolder").html("No Picture Avaiable.");
                                }

                            },
                            error: function (xhr) {
                                $("#divImageHolder").removeClass("StudentPictureSpinner");
                                $("#divImageHolder").html("Unable to load Picture.");
                            }
                        });
                    });

                </script>
                
            <div class="col-md-9 column mobile_menu">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="javascript:void(0);">Menu</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a id="DashBoard" href="https://cuonline.ciitwah.edu.pk:8089/Courses/Index" class=" selected">Dashboard</a></li>
                            <li><a id="RegistrationCard" href="https://cuonline.ciitwah.edu.pk:8089/Courses/Index">Registration Card</a></li>
                                                        <li><a id="Fees" href="https://cuonline.ciitwah.edu.pk:8089/Fees/Index">Fees</a></li>
                            <li><a id="ResultCard" href="https://cuonline.ciitwah.edu.pk:8089/ResultCard/Index">Result Card</a></li>
                            <li><a id="MyProfile" href="https://cuonline.ciitwah.edu.pk:8089/Profile/Index">Profile</a></li>
                            <li><a id="SupportSystem" href="https://cuonline.ciitwah.edu.pk:8089/Profile/Index">HelpDesk</a></li>
                            <li><a id="SignOut" href="https://cuonline.ciitwah.edu.pk:8089/Login/Sign_out">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
            <div class="main_body">
                <div style="min-height: 250px;" class="content_area">
                    <style>
    .no-js #loader {
        display: none;
    }

    .js #loader {
        display: block;
        position: absolute;
        left: 100px;
        top: 0;
    }

    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(../Content/img/Preloader_2.gif) center no-repeat #fff;
    }
</style>
<script src="./CUOnline Student Portal_files/jquery.min.js.download"></script>
<script src="./CUOnline Student Portal_files/modernizr.js.download"></script>

<div class="se-pre-con" style="display: none;">
</div>
        <link href="./CUOnline Student Portal_files/Dashboard.css" rel="stylesheet">
		<link href="./CUOnline Student Portal_files/PopupModelLayout.css" rel="stylesheet">
        <script src="./CUOnline Student Portal_files/progressBarTimer.js.download"></script>
		<script src="./CUOnline Student Portal_files/PopupModelLayout.js.download"></script>
		<!-- Add POPUP code here to display popup message. -->
        <div class="table-responsive quiz_listing">
            <div id="RegisteredCourses">
                <div style="background:#13A89E;margin: 10px;text-align: center;padding: 10px;font-weight: bold;color: white;font-size: 18px;">Registered Courses List</div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="">Course No</th>
                            <th width="">Course Name</th>
                            <th width="">Credits</th>
                            <th width="">Teacher</th>
                            <th title="Program - Semester - Description - Section" width="">Class</th>
                            <th>Attendance Summary</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49447&#39;">
                                <td>
                                    CSC462          
                                </td>
                                    <td title="Theory and Lab Scheme Course">
                                        Artificial Intelligence
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Shehar Bano
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49447-Class" title="Class Attendance" class="only_class_attendance" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 80%;">80%</div></div></div>
                                            <script>
                                                $('#bar_49447-Class').progressBarTimer({ _percentage: 80, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49445&#39;">
                                <td>
                                    CSC356          
                                </td>
                                    <td title="Theory and Lab Scheme Course">
                                        Human Computer Interaction
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Yasmin Khaliq
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49445-Class" title="Class Attendance" class="only_class_attendance" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 75%;">75%</div></div></div>
                                            <script>
                                                $('#bar_49445-Class').progressBarTimer({ _percentage: 75, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49443&#39;">
                                <td>
                                    CSC354          
                                </td>
                                    <td title="Theory Only Scheme Course">
                                        Machine Learning
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Momna Abbasi
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49443-Class Rescheduled" title="Class Rescheduled Attendance" class="lab_class_attendance" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            <script>
                                                $('#bar_49443-Class Rescheduled').progressBarTimer({ _percentage: 100, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>
                                            <div id="bar_49443-Exams" title="Exams Attendance" class="lab_class_attendance" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 100%;">100%</div></div></div>
                                            <script>
                                                $('#bar_49443-Exams').progressBarTimer({ _percentage: 100, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>
                                            <div id="bar_49443-Class" title="Class Attendance" class="lab_class_attendance" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 100%;">100%</div></div></div>
                                            <script>
                                                $('#bar_49443-Class').progressBarTimer({ _percentage: 100, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49449&#39;">
                                <td>
                                    CSE303          
                                </td>
                                    <td title="Theory Only Scheme Course">
                                        Software Design and Architecture
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Anam Amjad
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49449-Class" title="Class Attendance" class="lab_class_attendance" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 90%;">90%</div></div></div>
                                            <script>
                                                $('#bar_49449-Class').progressBarTimer({ _percentage: 90, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>
                                            <div id="bar_49449-Exams" title="Exams Attendance" class="lab_class_attendance" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 0%;">0%</div></div></div>
                                            <script>
                                                $('#bar_49449-Exams').progressBarTimer({ _percentage: 0, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49451&#39;">
                                <td>
                                    CSE331          
                                </td>
                                    <td title="Theory Only Scheme Course">
                                        Software Engineering Economics
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Riaz Ahmed
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49451-Class" title="Class Attendance" class="only_class_attendance" aria-valuenow="92" aria-valuemin="0" aria-valuemax="92"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 92%;">92%</div></div></div>
                                            <script>
                                                $('#bar_49451-Class').progressBarTimer({ _percentage: 92, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                            <tr style=" cursor: pointer;" onclick="window.location=&#39;/Courses/SetCourse/49453&#39;">
                                <td>
                                    CSE494          
                                </td>
                                    <td title="Theory and Lab Scheme Course">
                                        Software Project Management
                                    </td>
                                <td>
                                    3
                                </td>
                                <td>
                                    Faisal Shafique Butt
                                </td>
                                <td>

                                    BSE 6 NULL B
                                </td>
                                <td>
                                            <div id="bar_49453-Lab" title="Lab Attendance" class="lab_class_attendance" aria-valuenow="97" aria-valuemin="0" aria-valuemax="97"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 97%;">97%</div></div></div>
                                            <script>
                                                $('#bar_49453-Lab').progressBarTimer({ _percentage: 97, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>
                                            <div id="bar_49453-Class" title="Class Attendance" class="lab_class_attendance" aria-valuenow="94" aria-valuemin="0" aria-valuemax="94"><div class="progress active progress-striped" style="height: 20px;"><div class="progress-bar bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1" style="width: 94%;">94%</div></div></div>
                                            <script>
                                                $('#bar_49453-Class').progressBarTimer({ _percentage: 94, autoStart: true, timeLimit: 1, label: { show: true, type: 'percent' } });
                                            </script>

                                </td>
                            </tr>
                    </tbody>
                </table>
            </div> 
        </div>

                </div>
            </div>

        <footer>
    <div class="col-md-12 column footer_menu">
        <div title="CUONLINE Student Portal Update Version Number 7.0" class="inner_row">
            <p>
                <a style="font-weight: bold;font-size: 15px;" href="http://itscomsats.com/" target="_blank">
                    CUOnline
                </a>, Principal Seat © 2018-COMSATS ®
            </p>
        </div>
    </div>
</footer>
    </div>

</body></html>