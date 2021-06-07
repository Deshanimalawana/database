<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Index</title>
</head>
<body>
    <h2>Registration Form </h2>
        <form action="get" method="post">

            @csrf

            First Name: <input type="text" name="fname" id="fname"><span style="color: red">@error('fname'){{message}}@enderror</span><br><br>
            Last Name: <input type="text" name="lname" id="lname"><span style="color: red">@error('lname'){{message}}@enderror</span><br><br>
            E-mail: <input type="email" name="email" id="email"><span style="color: red">@error('email'){{message}}@enderror</span><br><br>
            Tep No: <input type="number" name="phonenumber" id="phonenumber"><span style="color: red">@error('phonenumber'){{message}}@enderror</span><br><br>
            <input type="submit" value="SUBMIT">





        </form>
</body>
</html>