<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <style>
        input[type=text],
        [type=password],
        [type=tel],
        [type=range],
        [type=email],
        [type=url],
        [type=file] {
            width: 98%;
            padding: 15px;
            margin: 12px;
            border: 2px solid red;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 15px;
        }

        input[type=submit],
        [type=reset] {
            width: 20%;
            height: 40px;
            background-color: green;
            color: white;
            padding: 7px;
            margin: 4px;
            border: none;
            border-radius: 10px;
        }

        label {
            color: blue;
            font-size: 20px;
            font-weight: bold;
        }

        input[type=submit]:hover,
        input[type=reset]:hover {
            background-color: lightblue;
        }

        div {
            box-shadow: 15px 10px brown;
            background-color: lightgrey;
            border-radius: 20px;
            padding: 15px;
            width: 60%;
            margin: auto;
        }
    </style>
</head>

<body>
    <div>
        <form action="">
            <h1 style="color:red">
                <center>Registration Form</center>
            </h1>
            <label>Name : </label>
            <input type="text" name=username placeholder="Enter your name" required>
            <label>Password : </label>
            <input type="password" name=pass placeholder="Enter your password" required>
            <label>Confirm Password : </label>
            <input type="password" placeholder="Confirm password" required>
            <label>Contact Number : </label>
            <input type="tel" name=tel pattern="[0-9]{10}" placeholder="Enter a number" required>
            <label>Skill Range : </label>
            <input type="range">
            <label>Email : </label>
            <input type="email" name=email placeholder="Enter your email" required>
            <label>Profile URL : </label>
            <input type="url" name=url placeholder="Enter a URL" required>
            <label>Resume : </label>
            <input type="file" placeholder="No file chosen" required>

            <center>
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </center>
        </form>
    </div>
</body>

</html>
<?php
    extract($_REQUEST);

    if(empty($username) || empty($pass)){
        //Do nothing :)
    }
    else{
    $file=fopen("data.txt", "a");

    fwrite($file, "Name : ");
    fwrite($file, $username ."\n");
    fwrite($file, "Password : ");
    fwrite($file, $pass ."\n");
    fwrite($file, "Contact Number : ");
    fwrite($file, $tel ."\n");
    fwrite($file, "Email : ");
    fwrite($file, $email ."\n");
    fwrite($file, "URL : ");
    fwrite($file, $url ."\n");

    fwrite($file, "-----------------------------------------------\n");

    fclose($file);
    }
?>
