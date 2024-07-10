<!DOCTYPE html>
<html>
<head>
    <!-- entête de la page -->
    <meta charset="utf-8" />
    <title> Authentification </title>
    <link rel="stylesheet" href="styleLogin.css"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    <form id="loginForm" method="post">
        <h1> Login </h1>
        <div class="input-box">
            <input type="text" name="login" placeholder="Identifiant" required>
            <i class='bx bxs-user'></i>
        </div>

        <h1> Mot de Passe </h1>
        <div class="input-box">
            <input type="password" name="mdp" placeholder="Mot de Passe" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
        <p id="retour"></p>
        <br>
        <div class="remember-forgot">
            <label><input type="checkbox"> Remember me</label>
            <br>
            <a href="#">Forgot password ?</a>
        </div>
        <br>
        <button type="button" id="submitBtn" class="btn"> Se connecter</button>
    </form>
</div>

<script>
$(document).ready(function() {
    $("#submitBtn").on("click", function() {
        $.ajax({
            url: "login.php",
            method: "POST",
            data: $("#loginForm").serialize(),
            success: function(response) {
                if(response === "success") {
                    alert('identifiant et mot de passe sont corrects !');
                    window.location.href = "EspacePerso.php";
                } else {
                    alert('identifiant et mot de passe sont incorrects !');
                }
            }
        });
    });
});
</script>
</body>
</html>
