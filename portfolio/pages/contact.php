<html>

<head>
    <title>Portfolio:Contact</title>
    <link rel="stylesheet" href="../css/index.css" </head> <body>
    <div id="head">
    <h1>Contact Us</h1>

<ul>
    <li><a class="active" href="../index.html">Home</a></li>
    <li><a href="PTHsite\index.html">PTHsite Project</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="about.html">About</a></li>
</ul>
    </div>
    <br>
    <div id="main">

    <center>
        <form name="form1" method="post" action="thankyou.php">
            First Name <br>
            <input type="text" name="fname" placeholder="John" required>
            <br>
            Last Name <br>
            <input type="text" name="lname" placeholder="Doe" required>
            <br>
            Email <br>
            <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Johndoe@example.com" required>
            <br>
            Reason for contact?
            <br>
            <select name="reason">
                <option value="Question">Question</option>
                <option value="Comment">Comment</option>
                <option value="Complaint">Complaint</option>
            </select>
            <br>
            Questions/Comments <br>
            <textarea name="qc" id="" cols="30" rows="10" placeholder="Thoughts?"></textarea>
            <br>
            <input id="submit" type="submit" value="Submit">
        </form>
    </center>
</div>
    </body>

</html>