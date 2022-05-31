<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JR Portfolio</title>
    <link rel="stylesheet" href="../css/newstyle.css">
</head>
<body>
    <div class="cntrContainer open" id="index">
        <img src="../img/me.jpeg" alt="" class="avatar">
        <h1>Jasper Rijsbaarman</h1>
        <div class="divider"></div>
        <h1><button onclick="switchView(index, aboutMe)" class="switchButton">About me</button></h1>
        <h1><button onclick="switchView(index, myWork)" class="switchButton">My work</button></h1>
    </div>
    
    <div class="cntrContainer hidden" id="aboutMe">
        <h1><button onclick="switchView(aboutMe, index)" class="switchButton"><- Home</button></h1>
        <div class="row">
            <div class="column contentMid">
                <h3 class="summary" id="myName">Jasper Rijsbaarman</h3>
                <p>Student software development</p>
                <p>Date of birth: 09/06/2004</p>
                <p>Celphone: 06 30338583</p>
                <p>Emailadress: jasperrijsb@gmail.com</p>
            </div>
            <img src="../img/me.jpeg" class="avatar" alt="">
        </div>
        <div class="divider"></div>
        <p>I am a motivated, enthusiastic realist. I will be the first to acknowledge a mistake, this goes for both myself and others. 
            I will also be the first one to help you to the best of my ability, and will be very curious if I can't fix the mistake myself.</p>
        <p></p>
    </div>

    <div class="cntrContainer myWorkWidth hidden" id="myWork">
        <h1><button onclick="switchView(myWork, index)" class="switchButton"><- Home</button></h1>
        <div class="row">
            <div class="workCard" onclick="myhref('https://github.com/Dr1ftr/GuessMyNumber')">
                <div class="workCardContent">
                    <img src="../img/guessMyNumber.png" alt="">
                </div>
                <div class="overlay">
                    <p>Guess my number</p>
                    <p>- Javascript</p>
                </div>
            </div>
            <div class="workCard" onclick="myhref('https://github.com/Dr1ftr/newsApp')">
                <div class="workCardContent">
                    <img src="../img/newsApp.png" alt="">
                </div>
                <div class="overlay">
                    <p>News App</p>
                    <p>- Flutter(Dart)</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script>
    function switchView(divId, targetDivId) {
        divId.classList.remove('open')
        divId.classList.add('hide')
        setTimeout(function() {
            divId.classList.add('hidden')
            divId.classList.remove('hide')

            targetDivId.classList.remove('hidden')
            targetDivId.classList.add('open')
        }, 1100);
    }

    function myhref(web){
    window.location.href = web;}
</script>