<!--<?php
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$connect=@mysql_connect("localhost","u372998677_stud","password");

mysql_select_db("u372998677_stud");


$query = mysql_query("SELECT * FROM Song_upload ORDER BY id ASC LIMIT 12");


while ($rows = mysql_fetch_array($query)):

    $Movie_Name = $rows['Movie_Name'];
    //$Singer_Name = $rows['Singer_Name'];
    $Music_Dir_Name = $rows['Music_Dir_Name'];
    //$Hero_Name = $rows['Hero_Name'];
    //$Year_Released = $rows['Year_Released'];
    //$Language = $rows['Language'];
    //$Upload_song = $rows['Upload_song'];
    $Image = $rows['Image'];
    //echo '<img height="300" width="360" src="data:image;base64,'.$row[6].' "> ';

    //echo $Movie_Name.'</br>'.$Singer_Name.'</br>'.$Music_Dir_Name.'</br>'.$Hero_Name.'</br>'.$Year_Released.'</br>'.$Language.'</br>'.$Upload_song.'</br>';

endwhile;

?> -->

<!DOCTYPE html>
<html>
<head>
    <title>uSvara</title>

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Start Slider section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End Slider section -->


    <!-- Adding audio player -->

    <!--<script src="audioplayerengine/jquery.js"></script>-->
    <script src="audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-2.css">
    <script src="audioplayerengine/initaudioplayer-2.js"></script>


    <!-- audio player end -->

    <style>

        .new-poster{
            float: left;
            margin:0 10px 10px 10px;/*margin:0 10px 10px 10px;*/
            /*border: 1px solid grey;/*border: 2px solid grey;*/
            /*border-radius: 10px;/*border-radius: 10px;*/
            padding: 0px;
        }

    </style>




    <style>
        .instuction {
            font-family: sans-serif, Arial;
            display: block;
            margin: 0 auto;
            max-width: 820px;
            width: 100%;
            padding: 0 70px;
            color: #222;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .instuction h1 img {
            max-width: 170px;
            vertical-align: middle;
            margin-bottom: 10px;
        }
        .instuction h1 {
            color: #2F98B3;
            text-align: center;
        }
        .instuction h2 {
            position: relative;
            font-size: 1.1em;
            color: #2F98B3;
            margin-bottom: 20px;
            margin-top: 40px;
        }
        .instuction h2 span.num {
            position: absolute;
            left: -70px;
            top: -18px;
            display: inline-block;
            vertical-align: middle;
            font-style: italic;
            font-size: 1.1em;
            width: 60px;
            height: 60px;
            line-height: 60px;
            text-align: center;
            background: #2F98B3;
            color: #fff;
            border-radius: 50%;
        }
        .instuction .mono {
            color: #000;
            font-family: monospace;
            font-size: 1.3em;
            font-weight: normal;
        }
        .instuction li.mono {
            font-size: 1.5em;
        }

        .instuction ul {
            font-size: 0.9em;
            margin-top: 0;
            padding-left: 0;
            list-style: none;
        }
        .instuction .note {
            color: #A3A3B2;
            font-style: italic;
            padding-top: 10px;
        }
        .instuction p.note {
            text-align: center;
            padding-top: 0;
            margin-top: 4px;
        }
        .instuction textarea {
            font-size: 0.9em;
            min-height: 60px;
            padding: 10px;
            margin: 0;
            overflow: auto;
            max-width: 100%;
            width: 100%;
        }
        .instuction a,
        .instuction a:visited {
            color: #2F98B3;
        }
    </style>

    <!-- pop window music player css -->

    <style>

        .box{
            float:right;
            background: transparent;
            bottom: 200px;
            height: 500px;/*230*/
            /*float:right;
            background: transparent;
            border: 1px solid #ffffff;
            margin: -197px -36px 0 200px;
            height: 230px;*/
        }
        .box-inner{
            width: 290px;
            padding: 10px;
            /*width: 400px;
            padding: 10px;*/
        }

        .pop {

            /*margin: 55px 0 10px 1255px;*/
            float: right;
            margin-top: 22px;
            position: relative;
            display: block;
        }

    </style>

    <!-- pop window music player end -->

    <!-- audio player script -->

    <script type="text/javascript">
        $(document).ready(function(){
            $(".slide-left, .slide-right").click(function(){
                $(".box").animate({
                    width: "toggle"
                });
            });
        });
    </script>

    <!-- audio player script end -->

    <script rel="script" type="text/javascript" src="script.js"></script>

</head>

<body>
<header>
    <div id="usvara-left">
        <div id="fivicon">
            <img src="photos/usvara.PNG" alt="uSvara Music"/>
        </div>
        <h2>uSvara</h2>
        <p>The Professional Music World</p>
    </div>
    <nav>
        <ul id="menu">
            <li><a href="home.html">Home</a></li>
            <li><a href="latest.html">Latest</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="#" id="more-li">More<span id="arrow">&#10549;</span></a>
                <ul id="more">
                    <a href="#"><li>Bookmark uSvara</li></a>
                    <a href="#"><li>uSvara For Android</li></a>
                    <a href="#"><li>uSvara For iPhone</li></a>
                    <a href="#"><li>Contact Us</li></a>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="usvara-right">
        <div>
        </div>
        <h2>uSvara</h2>
    </div>

    <div id="language">
        <nav>
            <ul >
                <li><a href="#">Hindi</a></li>
                <li><a href="#">English</a></li>
                <li><a href="#">Telugu</a></li>
                <li><a href="#">Punjabi</a></li>
                <li><a href="#">Tamil</a></li>
                <li><a href="#">Malayalam</a></li>
                <li><a href="#">Gujarathi</a></li>
                <li><a href="#">Bengali</a></li>
            </ul>
        </nav>
    </div><!-- language -->

    <!-- Woo Slider -->

        <div id="slider">
        <!-- Start Slider section -->
        <div id="wowslider-container1">
            <div class="ws_images"><ul>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=1");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_0" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=1");
                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                             endwhile;

        ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=2");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_1" src="<?php

                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=2");
                        while ($rows = mysql_fetch_array($query)):

                       echo 'data:image;base64,'.$rows[Image];
                   endwhile;

                   ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=3");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_2" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=3");
                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                        endwhile;

                        ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=4");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_3" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=4");
                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                        endwhile;

                        ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=5");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_4" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=5");


                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                        endwhile;

                        ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=6");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_5" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=6");
                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                        endwhile;

                        ?>"/></li>
                    <li><img height="360px" width="1000px" alt="music1" title="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=7");
                        while ($rows = mysql_fetch_array($query)):
                            $Title = $rows['Title'];

                            echo $Title;
                        endwhile;

                        ?>" id="wows1_6" src="<?php
                        $connect=@mysql_connect("localhost","u372998677_stud","password");
                        mysql_select_db("u372998677_stud");
                        $query = mysql_query("SELECT * FROM Slideshow WHERE id=7");
                        while ($rows = mysql_fetch_array($query)):

                            echo 'data:image;base64,'.$rows[Image];
                        endwhile;

                        ?>"/></li>
                </ul></div>
            <div class="ws_bullets"><div>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music1.jpg" alt="music1"/>1</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music2.jpg" alt="music2"/>2</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music3.jpg" alt="music3"/>3</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music4.jpg" alt="music4"/>4</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music5.jpg" alt="music5"/>5</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music5.jpg" alt="music5"/>6</span></a>
                    <a href="#" title="The Professional Music World"><span><img src="data1/tooltips/music5.jpg" alt="music5"/>7</span></a>
                </div></div><div class="ws_script" style="position:absolute;left:-99%">
                <div class="ws_shadow"></div>
            </div>
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>
            <!-- End Slider section -->
        </div>

    <!-- Woo slider End -->


    <!-- New search testing -->

 <!--   <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post' name='form_filter' >
        <select name="value">
            <option value="all">Movies</option>
            <option value="Fitzgerald">Singers</option>
            <option value="Herring">Music Directors</option>
        </select>
        <br />
        <input type='submit' value = 'Filter'>
    </form>


    <?php
    //connect to database, checking, etc
    $db_hostname = 'localhost';
    $db_username = 'u372998677_stud';
    $db_password = 'password';
    $db_database = 'u372998677_stud';

    // Database Connection String
    $con = @mysql_connect($db_hostname,$db_username,$db_password);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_database, $con);

    // process form when posted
    if(isset($_POST['value'])) {
        if($_POST['value'] == 'Fitzgerald') {
            // query to get all Fitzgerald records
            $query = "SELECT * FROM Song_upload WHERE Movie_Name='Sanam Re'";
        }
        elseif($_POST['value'] == 'Herring') {
            // query to get all Herring records
            $query = "SELECT * FROM Song_upload WHERE Singer_Name LIKE 's%' ORDER BY Singer_Name ASC";
        } else {
            // query to get all records
            $query = "SELECT * FROM Song_upload WHERE Music_Dir_Name LIKE 's%' ORDER BY Music_Dir_Name ASC";
        }
        $sql = mysql_query($query);

        while ($row = mysql_fetch_array($query)){
            $Movie_Name = $rows['Movie_Name'];
            $Singer_Name = $rows['Singer_Name'];
            $Music_Dir_Name = $rows['Music_Dir_Name'];
            $Hero_Name = $rows['Hero_Name'];
            $Year_Released = $rows['Year_Released'];
            $Language = $rows['Language'];
            $Upload_song = $rows['Upload_song'];

            // Echo your rows here...
           // echo 'The user ID is:' . $row['id'];
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Movie_Name'] . '</a></li></ul></div> ';
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Singer_Name'] . '</a></li></ul></div> ';
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Music_Dir_Name'] . '</a></li></ul></div> ';
        }
        mysql_close($con);
    }
    ?>

    <!-- New search testing end -->

    <!-- Filter Search -->


    <div class="row" style="margin:20px 0 0 20px">
        <form class="container">
            <div class="row">
                <div>
                    <input placeholder="" id="term" name="term" type="text" class="validate">
                    <label for="term"></label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" value="Submit" name="action">Movies
                    <i class="material-icons right"></i>
                </button>
           <!--     <div>
                    <input placeholder="" id="terms" name="terms" type="text" class="validate">
                    <label for="term"></label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" value="Submit" name="action">Heroes
                    <i class="material-icons right"></i>
                </button>
                <div>
                    <input placeholder="" id="termss" name="termss" type="text" class="validate">
                    <label for="term"></label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" value="Submit" name="action">Singers
                    <i class="material-icons right"></i>
                </button>
                <div>
                    <input placeholder="" id="termsss" name="termsss" type="text" class="validate">
                    <label for="term"></label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" value="Submit" name="action">Music Dir
                    <i class="material-icons right"></i>
                </button> -->

     <!--           <input id="terms" name="terms" type="submit" value="Heroes">
                <input id="termss" name="termss" type="submit" value="Singer">
                <input id="termsss" name="termsss" type="submit" value="Music Dir">    -->
           </div>
        </form>
    </div>

    <?php
    $db_hostname = 'localhost';
    $db_username = 'u372998677_stud';
    $db_password = 'password';
    $db_database = 'u372998677_stud';

    // Database Connection String
    $con = @mysql_connect($db_hostname,$db_username,$db_password);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_database, $con);
    ?>

    <?php
    if (!empty($_REQUEST['term'])) {

        $term = mysql_real_escape_string($_REQUEST['term']);

        $sql = "SELECT * FROM Song_upload WHERE Movie_Name LIKE '%" . $term . "%' OR  Hero_Name LIKE '%" . $term . "%' OR  Singer_Name LIKE '%" . $term . "%' OR  Music_Dir_Name LIKE '%" . $term . "%' ";
        $r_query = mysql_query($sql);

        while ($row = mysql_fetch_array($r_query)) {
            //echo 'Primary key: ' .$row['PRIMARYKEY'];
            //echo '<br /> Name:<a href="'.$row['College_Link']."></a> ' .$row['College_Name'];
            //echo '<br /> Link: '.$row['College_Link'];
            //echo '<br /> Category: '.$row['Category'];
            //echo '<br /> Cut Size: '.$row['CutSize'];
            //echo '<a href="'.$row['College_Link'].' ">'.$row['College_Name'].'</a> ';
            echo '
    <div class="container">
    <div class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Movie_Name'] . '</a> ';
            echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Hero_Name'] . '</a> ';
            echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Singer_Name'] . '</a> ';
            echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Music_Dir_Name'] . '</a></div></div> ';
        }
    }
    else {
        //echo'Sorry, your college not found in our database.</div></div>';
    }

    ?>
<!--
    <?php
    $db_hostname = 'localhost';
    $db_username = 'u372998677_stud';
    $db_password = 'password';
    $db_database = 'u372998677_stud';

    // Database Connection String
    $con = @mysql_connect($db_hostname,$db_username,$db_password);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_database, $con);
    ?>

    <?php
    if (!empty($_REQUEST['terms'])) {

        $terms = mysql_real_escape_string($_REQUEST['terms']);

        $sql = "SELECT * FROM Song_upload WHERE Hero_Name LIKE '%" . $terms . "%' ORDER BY Hero_Name ASC";
        $r_query = mysql_query($sql);

        while ($row = mysql_fetch_array($r_query)) {
            //echo 'Primary key: ' .$row['PRIMARYKEY'];
            //echo '<br /> Name:<a href="'.$row['College_Link']."></a> ' .$row['College_Name'];
            //echo '<br /> Link: '.$row['College_Link'];
            //echo '<br /> Category: '.$row['Category'];
            //echo '<br /> Cut Size: '.$row['CutSize'];
            //echo '<a href="'.$row['College_Link'].' ">'.$row['College_Name'].'</a> ';
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Hero_Name'] . '</a></li></ul></div> ';
        }
    }
    else {
        //echo'Sorry, your college not found in our database.</div></div>';
    }

    ?>

    <?php
    $db_hostname = 'localhost';
    $db_username = 'u372998677_stud';
    $db_password = 'password';
    $db_database = 'u372998677_stud';

    // Database Connection String
    $con = @mysql_connect($db_hostname,$db_username,$db_password);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_database, $con);
    ?>

    <?php
    if (!empty($_REQUEST['termss'])) {

        $termss = mysql_real_escape_string($_REQUEST['termss']);

        $sql = "SELECT * FROM Song_upload WHERE Singer_Name LIKE '%" . $termss . "%' ORDER BY Singer_Name ASC";
        $r_query = mysql_query($sql);

        while ($row = mysql_fetch_array($r_query)) {
            //echo 'Primary key: ' .$row['PRIMARYKEY'];
            //echo '<br /> Name:<a href="'.$row['College_Link']."></a> ' .$row['College_Name'];
            //echo '<br /> Link: '.$row['College_Link'];
            //echo '<br /> Category: '.$row['Category'];
            //echo '<br /> Cut Size: '.$row['CutSize'];
            //echo '<a href="'.$row['College_Link'].' ">'.$row['College_Name'].'</a> ';
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Singer_Name'] . '</a></li></ul></div> ';
        }
    }
    else {
        //echo'Sorry, your college not found in our database.</div></div>';
    }

    ?>

    <?php
    $db_hostname = 'localhost';
    $db_username = 'u372998677_stud';
    $db_password = 'password';
    $db_database = 'u372998677_stud';

    // Database Connection String
    $con = @mysql_connect($db_hostname,$db_username,$db_password);
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db($db_database, $con);
    ?>

    <?php
    if (!empty($_REQUEST['termsss'])) {

        $termsss = mysql_real_escape_string($_REQUEST['termsss']);

        $sql = "SELECT * FROM Song_upload WHERE Music_Dir_Name LIKE '%" . $termsss . "%' ORDER BY Music_Dir_Name ASC";
        $r_query = mysql_query($sql);

        while ($row = mysql_fetch_array($r_query)) {
            //echo 'Primary key: ' .$row['PRIMARYKEY'];
            //echo '<br /> Name:<a href="'.$row['College_Link']."></a> ' .$row['College_Name'];
            //echo '<br /> Link: '.$row['College_Link'];
            //echo '<br /> Category: '.$row['Category'];
            //echo '<br /> Cut Size: '.$row['CutSize'];
            //echo '<a href="'.$row['College_Link'].' ">'.$row['College_Name'].'</a> ';
            echo '
    <div class="container">
    <ul class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Music_Dir_Name'] . '</a></li></ul></div> ';
        }
    }
    else {
        //echo'Sorry, your college not found in our database.</div></div>';
    }

    ?>




-->


    <div id="search-container">
            <h2>FILTER BY</h2>
            <form action="#">
                <ul>
                    <li id="filter-button1" class="filter-button" onclick="background(this.id)"/>SEARCH</li>
                    <li id="filter-button2" class="filter-button" onclick="background(this.id)"/>HEROES</li>

                    <li id="filter-button3" class="filter-button" onclick="background(this.id)"/>SINGERS</li>
                    <li id="filter-button4" class="filter-button" onclick="background(this.id)"/>MUSIC DIR</li>
                </ul>
                <div id="search" class="search">
                    <input type="text" class="search-field" id="term" name="term"/>
                    <input id="apply-button" type="submit" value="APPLY" onload="setZindex()" onclick="direction()"/>
               </div>

                <div id="heroes-search" class="search">

                    <input type="text" class="search-field" id="search-field2"/>
                    <input id="apply-button" type="submit" value="APPLY" onclick="direction()"/>
                </div>
                <div id="singers-search" class="search">

                    <input type="text" class="search-field" id="search-field3"/>
                    <input id="apply-button" type="submit" value="APPLY" onclick="direction()"/>
                </div>
                <div id="music-dir-search" class="search">

                    <input type="text" class="search-field" id="search-field4"/>
                    <input id="apply-button" type="submit" value="APPLY" onclick="direction()"/>
                </div>

            </form>



        </div><!-- search container -->
</header>


<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '12345678';
$db_database = 'Song_upload';

// Database Connection String
$con = @mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db_database, $con);
?>

<?php
if (!empty($_REQUEST['term'])) {

    $term = mysql_real_escape_string($_REQUEST['term']);

    $sql = "SELECT * FROM Songs WHERE Movie_Name LIKE '%" . $term . "%' OR  Hero_Name LIKE '%" . $term . "%' OR  Singer_Name LIKE '%" . $term . "%' OR  Music_Dir_Name LIKE '%" . $term . "%' ";
    $r_query = mysql_query($sql);

    while ($row = mysql_fetch_array($r_query)) {
        //echo 'Primary key: ' .$row['PRIMARYKEY'];
        //echo '<br /> Name:<a href="'.$row['College_Link']."></a> ' .$row['College_Name'];
        //echo '<br /> Link: '.$row['College_Link'];
        //echo '<br /> Category: '.$row['Category'];
        //echo '<br /> Cut Size: '.$row['CutSize'];
        //echo '<a href="'.$row['College_Link'].' ">'.$row['College_Name'].'</a> ';
        echo '
    <div class="container">
    <div class="row">
    <a href="' . $row['Upload_song'] . ' ">' . $row['Movie_Name'] . '</a> ';
        echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Hero_Name'] . '</a> ';
        echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Singer_Name'] . '</a> ';
        echo'<a href="' . $row['Upload_song'] . ' ">' . $row['Music_Dir_Name'] . '</a></div></div> ';
    }
}
else {
    //echo'Sorry, your college not found in our database.</div></div>';
}

?>

<!-- Filter search end -->


<div id="content">
    <div id="content-top">
        <h3>uSvaras Top 7 of the Week</h3>

        <div id="top-seven" >
            <span class="index">1.</span>

   <!-- 7 songs with different id's for music player || just change the first part of link before question mark to your website address -->
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=0&autoplayaudio=1">
                <div id="poster-top-seven">
                </div><p>Sanam Re</p></a><br>
            <span class="index">2.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=1&autoplayaudio=1"><div class="circle">></div><p>Brothers Anthem</p></a><br>
            <span class="index">3.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=2&autoplayaudio=1"><div class="circle">></div><p>Soch Na Sake</p></a><br>
            <span class="index">4.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=3&autoplayaudio=1"><div class="circle">></div><p>Mar Jaayen</p></a><br>
            <span class="index">5.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=4&autoplayaudio=1"><div class="circle">></div><p>Saala Khadoos</p></a><br>
            <span class="index">6.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=5&autoplayaudio=1"><div class="circle">></div><p>Tere Bin</p></a><br>
            <span class="index">7.</span>
            <a href="http://localhost:63343/Usvara%20top%207%20playlist%20player/index.html?firstaudioid=6&autoplayaudio=1"><div class="circle">></div><p>Yeh Fittor Mera</p></a>
        </div><!-- top 7 content -->

        <div id="new-releases">
            <h4>New Releases</h4>
            <a href=""><div class="see-all-button">See All</div></a>
            <br><br>

<!-- To fetch the albums -->

            <?php
            $dbhost = 'localhost';
            $dbuser = 'u372998677_stud';
            $dbpass = 'password';
            $connect=@mysql_connect("localhost","u372998677_stud","password");

            mysql_select_db("u372998677_stud");


            $query = mysql_query("SELECT * FROM Song_upload ORDER BY id ASC LIMIT 12");


            while ($rows = mysql_fetch_array($query)):

                $Movie_Name = $rows['Movie_Name'];
                $Singer_Name = $rows['Singer_Name'];
                $Music_Dir_Name = $rows['Music_Dir_Name'];
                $Hero_Name = $rows['Hero_Name'];
                $Year_Released = $rows['Year_Released'];
                $Language = $rows['Language'];
                $Upload_song = $rows['Upload_song'];

                echo '<div class="new-poster"><img height="140" width="140" src="data:image;base64,'.$rows[Image].' "> ';
                echo '<br>'.$Movie_Name.'</br><div class="none" style="color: #bdbdbd"> '.$Music_Dir_Name.'</div></div>';


            endwhile;

            ?>

<!-- Fetch the album end -->

            <!-- <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div> -->
<!--
            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div> -->

        </div><!-- new releases -->
    </div><!-- content top -->

    <div id="content-bottom">
        <h3>uSvara's JUKEBOXES</h3>
        <div id="jukeboxes">
            <a href=""><p class="top-ten">1.Top 10 Love Songs</p></a>
            <a href=""><p class="top-ten">2.Top 10 Title Songs</p></a>
            <a href=""><p class="top-ten">3.Top 10 Devotional Songs</p></a>
            <a href=""><p class="top-ten">4.Top 10 Item Songs</p></a>
            <a href=""><p class="top-ten">5.Top 10 Pop Songs</p></a>
            <a href=""><p class="top-ten">6.Top 10 .... Songs</p></a>
            <a href=""><p class="top-ten">7.Top 10 .... Songs</p></a>
            <a href=""><p class="top-ten">8.Top 10 .... Songs</p></a>
            <a href=""><p class="top-ten">9.Top 10 .... Songs</p></a>
            <a href=""><p class="top-ten">10.Top 10 .... Songs</p></a>
        </div><!-- jukeboxes -->


        <div id="most-popular">
            <h4>Most Popular</h4>
            <a href=""><div class="see-all-button">See All</div></a>

            <a href="#"><div class="select-button">></div></a>
            <a href="#"><div class="select-button"><</div></a>

            <br><br>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>
        </div><!-- most popular -->

        <div id="devotinal">
            <h4>Devotional</h4>

            <br><br>
            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>

            <div class="poster">
                <video width="200" height="200" controls>
                    <source src="Charuseela.mp4" type="video/mp4"/>
                </video>
            </div>
        </div><!-- devotional -->
    </div><!-- content-bottom -->
</div><!-- content -->

<!-- Pop window added -->

<div class="pop">
    <div class="btn-group">
        <button type="button" class="slide-left"><h3>P<br><br>O<br><br>P<br><br>W<br><br>I<br><br>N<br><br>D<br><br>O<br><br>W<br><br></h3></button>
    </div>
</div>

<!-- Pop window ended -->

<!-- Inside pop windows add music player -->

<div class="box">
    <div class="box-inner">
        <div style="margin:12px auto;">

            <!-- Insert to your webpage where you want to display the audio player -->
            <div id="amazingaudioplayer-2" style="display:block;position:relative;width:300px;height:300px;margin:0px auto 0px;">
                <ul class="amazingaudioplayer-audios" style="display:none;">
                    <li data-artist="Mithoon & Arijit Singh" data-title="Sanam Re" data-album="Sanam Re" data-info="" data-image="audios/Sanam_Re_Poster.jpg" data-duration="309">
                        <div class="amazingaudioplayer-source" data-src="audios/01 - Sanam Re - Sanam Re [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Vishal Dadlani" data-title="Brothers Anthem" data-album="Brothers" data-info="" data-image="audios/Brothers-Hindi-2015-150x150.jpg" data-duration="354">
                        <div class="amazingaudioplayer-source" data-src="audios/01 Brothers Anthem - DJMaza.Info.mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Amaal Mallik, Arijit Singh" data-title="Soch Na Sake" data-album="Airlift" data-info="" data-image="audios/airlift-poster.jpg" data-duration="281">
                        <div class="amazingaudioplayer-source" data-src="audios/01 - Airlift - Soch Na Sake (Version 1) [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Atif Aslam & Mithoon" data-title="Mar Jaayen" data-album="Loveshhuda" data-info="" data-image="audios/loveshhuda poster.jpg" data-duration="258">
                        <div class="amazingaudioplayer-source" data-src="audios/01 - LS - Mar Jaayen [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Vishal Dadlani" data-title="Saala Khadoos" data-album="Saala Khadoos" data-info="" data-image="audios/Saala Khadoos Poster.jpg" data-duration="254">
                        <div class="amazingaudioplayer-source" data-src="audios/01 - SK - Saala Khadoos [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Sonu Nigam & Shreya Ghoshal" data-title="Tere Bin" data-album="Wazir" data-info="" data-image="audios/wazir-poster.jpg" data-duration="245">
                        <div class="amazingaudioplayer-source" data-src="audios/01 - Wazir - Tere Bin [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                    <li data-artist="Arijit Singh" data-title="Yeh Fitoor Mera" data-album="Fitoor" data-info="" data-image="audios/Fitoor.jpg" data-duration="283">
                        <div class="amazingaudioplayer-source" data-src="audios/02 - Fitoor - Yeh Fitoor Mera [DJMaza.Info].mp3" data-type="audio/mpeg" />
                    </li>
                </ul>
            </div>
            <!-- End of body section HTML codes -->

        </div>
    </div>
</div>

<!-- Pop up music player ended -->

<footer>
    <div id="footer-div-1">
        <h2>About Us</h2>
        <p>uSvara is a ..................................................................................................</p>
    </div>
    <div id="footer-div-2">
        <h2>Social Media</h2>
        <p>Follow Us On:</p>
        <a href="http://facebook.com" target="_BLANK"><div class="media-icon">F</div></a>
        <a href="http://plus.google.com" target="_BLANK"><div class="media-icon">G+</div></a>
        <a href="http://twitter.com" target="_BLANK"><div class="media-icon">T</div></a>
    </div>
    <div id="footer-div-3">
        <h2>Quick Links</h2>
        <p><a href=""><span>></span> uSvara For Android</a></p>
        <p><a href=""><span>></span> Blog</a></p>
        <p><a href=""><span>></span> Sitemap</a></p>
        <p><a  href=""><span>></span> Enquiry</a></p>
    </div>

    <div id="footer-div-4">
        <h3>NEWSLETTER</h3>
        <form method="POST" action="#" onsubmit="return subscribe();">
            <input id="email-id" type="text" value="Email ID"/>
            <input id="subscribe-button" type="submit" value="SUBSCRIBE"/>
        </form>
        <br>
        <h2>Suppport</h2>
        <div>P</div><p>040-66272727</p>
        <div>E</div><p>contact@usvara.com</p>
    </div>
</footer>

</body>
</html>