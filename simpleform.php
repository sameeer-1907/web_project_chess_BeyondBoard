<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body bgcolor="#dddee0" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">



<div class="containerA">
    <div>
        <h1 class="chess-color head-size center"> Beyond Board </h1>
    </div>
    <div style="margin-left:10px;">
        <img src="chesslogo.png" alt="Beyond Board" width="70" height="70">
    </div>
</div>
<hr type="solid" color="black" size="10px" class="line">

<div class="containerB">
    <div class="containerB1">
        <h1 class="margin-text">
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Welcome to BeyondBoard! </h1>
<h3 class="content-margin-head"> Join the Ultimate Chess Experience!</h3>

<h3 class="content-margin-head">Dear Chess Enthusiast,</h3>

<p class="content-margin-matter">Welcome to BeyondBoard - your gateway to a world of strategic brilliance, tactical finesse, and endless entertainment. We're thrilled to have you on board as part of our vibrant community of chess aficionados!</p>

<h3 class="content-margin-head"> Embark on Your Chess Journey:</h3>

<p class="content-margin-matter">Whether you're a grandmaster in the making or just starting to explore the chess universe, you've found the perfect place to challenge your mind, improve your skills, and connect with fellow players from across the globe.</p>
        </h3>
        <div class="container-underB1">
            <img src="3d.png" alt="chess" width="569px;" height="320px">
        </div>

    </div>

    <div class="containerB2">
        <div class="form-container" >
            <h1 class="center upper-gap" style="color:black; font-family:sans-serif;">Sign up</h1>

            <form method="POST" action="signupconn.php">
                <div class="input-wrapper">
                    <span>
                        <h2 class="name"> Username: &nbsp; &nbsp; &nbsp;  </h2>
                    </span>
                    <input type="text" name="username" required class="input-box" placeholder="Enter your username" style="text-align:center;">
                </div>

                <div class="input-wrapper">
                    <span>
                        <h2 class="name"> Password: </h2>
                    </span>
                    <input type="password" name="password" required class="input-box" placeholder="Enter your password" style="text-align:center">
                </div>

                <div class="input-wrapper">
                    <span>
                        <h2 class="name"> Your Email ID: &nbsp; &nbsp; &nbsp;</h2>
                    </span>
                    <input type="text" name="email" required class="input-box" placeholder="Enter your Email ID" style="text-align:center;">
                </div>

                <div class="privacy">
                    <input type="checkbox" id="acceptCheckbox" >
                    <p>I have read and accepted the </p>
                    <a href="privacy.html" style="color:black;"> privacy statement. </a>
                </p>
                </div>

                <div class="submit-div">
                    <button type="submit" class="submit-button" disabled>Submit</button>
                </div>

            </form>
        </div>

    </div>
</div>

<div class="sign-in">
    Already have an account?<a href="signin.html" class="sign-in1" >
    Sign in  </a>
</div>

<script>
    function showPopupMessage(message) {
        const popup = document.getElementById("passwordError");
        popup.innerHTML = message;
        popup.classList.remove("hidden-popup");
        document.querySelector(".submit-button").disabled = true; 
    }

    function hidePopupMessage() {
        const popup = document.getElementById("passwordError");
        popup.classList.add("hidden-popup");
        document.querySelector(".submit-button").disabled = false; 
    }

    document.getElementById("acceptCheckbox").addEventListener("change", function() {
        document.querySelector(".submit-button").disabled = !this.checked;
    });
    </script>


</body>
</html>
