<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>World Arab Gaming</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="style_whmcs-blue.css">
        <link rel="stylesheet" type="text/css" href="css/slicebox.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" type="text/css" href="css/skins/blue.css">
        <link rel="stylesheet" type="text/css" href="sign/style.css">
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>
    <body>
        <div id="Wrapper">
            <div id="Wrapper_Content">
                <div id="Container">
                    <header>
                        <div id="Header">
                                                              
                            <div class="Logo"></div>
                            <div class="Social_Icon">
                                <ul>
                                    <li class="facebook"><a href="https://www.facebook.com/groups/TsWAG" target="_blank" title="facebook"></a></li>
                                    <li class="twitter"><a href="https://steamcommunity.com/groups/World_Arab_Gaming" target="_blank" title="Steam"></a></li>
                                    <li class="youtube"><a href="https://www.youtube.com/channel/UCjwVGvQfjEVCEzUCHiZ6kTQ?view_as=subscriber" target="_blank" title="youtube"></a></li>
                                    <li class="rss"><a href="ts3server://120?port=9987" target="_blank" title="Teamspeak"></a></li>
                                    
                                </ul>
         
                      
                            </div>
                            <!--/Social_Icon-->
                                        
                            <nav>
                                <div class="Menu">
                                    <div class="Menu_right"><a href="index.php"></a></div>
                                    <ul>
                                        <li><a href="form.php">تقديم على فاكشن</a></li>
                                        <li><a href="rankform.php">تقديم على رتبة</a></li>
                                      
                                       
                                    </ul>
                                    <div class="Menu_left"><a href="ts3server://120?port=9987">طلب مساعدة من ادمن</a></div>
                                </div>
                            </nav>
                                    
                            <!--/Menu--> 
                        </div>
                    </header>
                    <!--/Header-->
                        <div id="Body">
                            <div id="Content">
                                <div class="spacer">
                                    <div class="spacer_content">
                                        <h1>تفاصيل التقديم على وظيفة</h1>
                                        <h2>اختر  وظيقة  واملاء  الحقول  المطلوبة</h2>
                                        
                                    </div>
                                </div>
                                <!--/spacer-->
                                <div class="contact_block">
                                    <h2>الشرطة المحلية</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>السحب</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>الحكومة المحلية</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>امن الطرق</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>وزارة الصحة(قسم الاسعاف)</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>وزارة الصحة(قسم الاطفاء)</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>مكتب التحقيقات الفدرالية</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>وزارة الاعلام</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>وحدات التدخل السريع</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->
                                <div class="contact_block">
                                    <h2>شركة بيع الاثاث</h2>
                                    <p class="on">التقديم(مفتوح)</p>
                                    <div><a href="formsent.php">تقديم</a></div>
                                </div>
                                <!--contact_block-->

                              <!-- فيديو شرح التقديم
                                   <div class="contact_bl0ck">
                                    <h2>فيديو شرح التقديم</h2>
                                </div>
                                <iframe width="680" height="380" class="tutvid" data-thumbnail-src="https://i9.ytimg.com/vi/ht0NUqBn0Zg/default.jpg?sqp=CICkqe0F&amp;rs=AOn4CLA6tBim-mIR3esDkUQVVCt3yNJnUw" src="https://www.youtube.com/embed/ht0NUqBn0Zg?feature=player_embedded" frameborder="0" allowfullscreen=""></iframe>
                                
                            -->
                            </div>
                                                    <!--/Services-->
                            <div id="Sidebar">
                               
                                <div class="Widget">
                                    <h2 class="links">الادوات<span>-</span></h2>
                                    <div class="Widget_Links">
                                        <ul>
                                            <li><a href="#">كيف تقدم على وظيفة</a></li>
                                            <li><a href="images/WAGMAP.png">خريطة السيرفر</a></li>
                                            <li><a id="timeform" onclick="timeform()" >اوقات التعيين</a></li>
                                            <li><a id="helpmail" onclick="helpmail()" >استفسارت اخرى تواصل معنا</a></li>
                                        </ul>
                                    </div>
                            
                              

                            
                            </div>
  
                    </div>
                    <!--/Body-->
                    
                    <div id="Footer">
                        <footer>
                            <!--/Footer_About-->
                            <div class="Footer_Links">
                                <h2>معلومات المستخدم</h2>
                                                                               <!-- logged in user information -->
                                                                               <?php  if (isset($_SESSION['username'])) : ?>
                                    <p style="font-size: 20px;"> username : <strong><?php echo $_SESSION['username']; ?></strong></p>
                                    <p> <a href="index.php?logout='1'" style="color: #c20c0c;  border-radius: 15%;border: 5px;float: right;font-size:15px;font-family: Verdana;"><img src="images/icons/login_out.png" ></a> </p>
                                <?php endif ?>
               
                            </div>

                            <!--/Footer_Links-->
                           <div class="Footer_Contact">
                                <h2>تواصل معنا</h2>
                                <p class="email">WorldArabGaming.help@gmail.com</p>

                            </div>
                            <!--/Footer_Contact-->
                            <div class="Footer_Bottom">
                                <p>© CopyRights #W.A.G 2015-2020</p>
                            
                            </div>
                            <!--/Footer_Bottom--> 
                        </footer>
                    </div>
                    <!--/Footer--> 
                </div>
                <!--/Container--> 
            </div>
            <!--/Wrapper_Conten--> 
        </div>
        <!--/Wrapper-->
        <script>
        function helpmail() {
        document.getElementById("helpmail").innerHTML = "worldarabgaming.help@gmail.com";
        }
        function timeform() {
        document.getElementById("timeform").innerHTML = "من 9م الى 12ص بتوقيت العراق";
        }
        </script>
        <script type="text/javascript" src="js/jquery_easing.js"></script>
        <script type="text/javascript" src="js/jcarousel.js"></script>
        <script type="text/javascript" src="js/slide-show.js"></script>
        <script type="text/javascript" src="js/toll_tip.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
        <script type="text/javascript" src="js/jquery.slicebox.js"></script>
        <script type="text/javascript" src="js/jquery.icheck.js"></script>
        <script type="text/javascript" src="js/tatwerat.js"></script>
    </body>
</html>
