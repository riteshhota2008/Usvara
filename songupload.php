<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Usvara - Upload Song</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <style type="text/css">
        .form-style-5{
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }
        .form-style-5 fieldset{
            border: none;
        }
        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }
        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }
        .form-style-5 input[type="text"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: Georgia, "Times New Roman", Times, serif;
            background: rgba(255,255,255,.1);
            border: none;
            border-radius: 4px;
            font-size: 16px;
            margin: 0;
            outline: 0;
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: #e8eeef;
            color:#8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 30px;

        }
        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="date"]:focus,
        .form-style-5 input[type="datetime"]:focus,
        .form-style-5 input[type="email"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 input[type="search"]:focus,
        .form-style-5 input[type="time"]:focus,
        .form-style-5 input[type="url"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus{
            background: #d2d9dd;
        }
        .form-style-5 select{
            -webkit-appearance: menulist-button;
            height:35px;
        }
        .form-style-5 .number {
            background: #1abc9c;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255,255,255,0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"]
        {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #1abc9c;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #16a085;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }
        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover
        {
            background: #109177;
        }
    </style>

</head>
<body>

<div class="form-style-5">
    <form method="post" enctype="multipart/form-data">
        <fieldset>
            <legend><span class="number">1</span> Song Details</legend>
            <input type="text" name="Movie_Name" id="Movie_Name" placeholder="Movie Name *">
            <input type="text" name="Singer_Name" id="Singer_Name" placeholder="Singer Name *">
            <input type="text" name="Music_Dir_Name" id="Music_Dir_Name" placeholder="Music Director Name *">
            <input type="text" name="Hero_Name" id="Hero_Name" placeholder="Hero Name *">
            <input type="text" name="Year_Released" id="Year_Released" placeholder="Year Released *">
            <!--<textarea name="field3" placeholder="About yourself"></textarea>-->
            <label for="job">Language:</label>
            <select id="job" name="Language">
                <optgroup label="">
                    <option value="Hindi">Hindi</option>
                    <option value="English">English</option>
                    <option value="Telugu">Telugu</option>
                    <option value="Punjabi">Punjabi</option>
                    <option value="Marathi">Marathi</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Malayalam">Malayalam</option>
                    <option value="Gujrati">Gujrati</option>
                    <option value="Bengali">Bengali</option>
                </optgroup>
            </select>
        </fieldset>
        <fieldset>
            <legend><span class="number">2</span> Song Link</legend>
            <textarea name="Upload_song" id="Upload_song" placeholder="Song Link *"></textarea>
            <legend><span class="number">3</span>Movie Poster</legend>
            <input type="file" name="image" id="image">
        </fieldset>
        <input type="submit" value="Submit" name="sumit">
    </form>
</div>

</body>
</html>

<?php
if(isset($_POST['sumit']))
{
    if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
    {
        echo "Please select a valid image.";
    }
    else
    {

        $Movie_Name=$_POST['Movie_Name'];
        $Singer_Name=$_POST['Singer_Name'];
        $Music_Dir_Name=$_POST['Music_Dir_Name'];
        $Hero_Name=$_POST['Hero_Name'];
        $Year_Released=$_POST['Year_Released'];
        $Language=$_POST['Language'];
        $Upload_song=$_POST['Upload_song'];


        $image= addslashes($_FILES['image']['tmp_name']);
        $name= addslashes($_FILES['image']['name']);
        $image= file_get_contents($image);
        $image= base64_encode($image);
        saveimage($Movie_Name,$Singer_Name,$Music_Dir_Name,$Hero_Name,$Year_Released,$Language,$Upload_song,$name,$image);//saveimage($name,$image);
    }
}
//displayimage();
function saveimage($FirstName,$Singer_Name,$Music_Dir_Name,$Hero_Name,$Year_Released,$Language,$Upload_song,$name,$image)
    //function saveimage($name,$image)
{
    $con=@mysql_connect("localhost","root","pass");
    mysql_select_db("db",$con);
    $qry="insert into Song_upload (Movie_Name,Singer_Name,Music_Dir_Name,Hero_Name,Year_Released,Language,Upload_song,Image_Name,Image) values ('$FirstName','$Singer_Name','$Music_Dir_Name','$Hero_Name','$Year_Released','$Language','$Upload_song','$name','$image')";
    //$qry="insert into images (name,image) values ('$name','$image')";
    $result=mysql_query($qry,$con);
    if($result)
    {
        header('Location: http://www.riteshhota.16mb.com');//echo "<br/>Image uploaded.";
    }
    else
    {
        echo "Image not uploaded";//echo "<br/>Image not uploaded.";
    }
}
?>
