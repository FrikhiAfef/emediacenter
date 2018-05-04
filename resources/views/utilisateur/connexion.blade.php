
<!DOCTYPE html>
<html lang="en" class="no-js ie6 lt8">
<html lang="en" class="no-js ie7 lt8">
<html lang="en" class="no-js ie8 lt8">
<html lang="en" class="no-js ie9">
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />

    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/css/demo.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('utilisateur/css/animate-custom.css')}}" />
</head>
<body>
<br> <br> <br> <br><br> <br>
<div class="container">
    <section>
        <div id="container_demo" >
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="mysuperscript.php" autocomplete="on">
                        <h1>Connexion</h1>
                        <p>
                            <label for="username" class="uname" data-icon="u" > Adresse email</label>
                            <input id="username" name="username" required="required" type="text" placeholder="exemple@exemple.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd" data-icon="p"> Mot de passe</label>

                            <input id="password" name="password" required="required" type="password" placeholder="exemple:X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Rester connecté
                            </label>
                        </p>
                        <p class="login button">
                            <input type="submit" value="Connexion" />
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
</body>
</html>
