<html>
<body>
<fieldset>
    <h1 style="font-weight: bold; font-style: inherit; font-size: 40px;">THE AUSTRALIAN BAKERY</h1>
    Thank you very much for signing up! We look forward to serve you well
    We have added the following information to our files regarding your interests
    Your name is:<div style="color:blue"> <?php echo $_POST["name"]; ?></div>
    Your email address is: <div style="color:blue"> <?php echo $_POST["email"]; ?></div>
    Your date of Birth is : <div style="color:blue"> <?php echo $_POST["DOB"]; ?></div>
    You have indicated that you like:<div style="color:blue">  <?php echo $_POST["species"]; ?></div>
    Your feedback to us!: <div style="color:blue"> <?php echo $_POST["message"]; ?></div>
    Thank you very much!.<br>
    Once agian, we hope to serve you well with our products!<br>
    Best Regards<br>
   Salley: Store owner of the Australian Bakery<br>
</fieldset>
<div>
    <a href="index.html"><button>Navigate Home</button></a>
</div>
</body>
</html>


