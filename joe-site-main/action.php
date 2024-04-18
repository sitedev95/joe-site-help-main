<h1>Welcome <?php echo $_POST["fname"] ?></h1>

<h2>Your information was recieved as the following:</h2>

<ul>
    <li>Name: <?php echo $_POST["fname"] ?></li>
    <li>Address: <?php echo $_POST["address"] ?></li>
    <li>Email Address: <?php echo $_POST["email"] ?></li>
    <li>Phone number: <?php echo $_POST["phone"] ?></li>
    <li>Subject: <?php echo $_POST["subject"] ?></li>
</ul>

<button onclick="goToHomepage()">Return to Index Page</button>

<script>
    function goToHomepage() {
        window.location = "/index.php";
    }
</script>