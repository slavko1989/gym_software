<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
   
    <h1 style="text-align: center;font-weight: bolder;font-display: fallback;font-style: oblique;">New members with web card</h1>
    <p>Member: {{ $member->name }} </p>
    <p>Email: {{ $member->email }} </p>
    <p>Category: {{ $member->categories->name }} </p>

    <p style="font-family: monospace; font-weight: bolder; color: forestgreen;">
        Please go to your admin panel and check new member
    </p>


</body>
</html>