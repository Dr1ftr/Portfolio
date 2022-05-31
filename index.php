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
            <h3 class="summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cupiditate, dolorem perspiciatis distinctio quas maiores ullam recusandae fugit autem ipsam alias eveniet, aliquid assumenda obcaecati neque, beatae porro asperiores provident!</h3>
            <img src="../img/me.jpeg" class="avatar" alt="">
        </div>
    </div>

    <div class="cntrContainer myWorkWidth hidden" id="myWork">
        <h1><button onclick="switchView(myWork, index)" class="switchButton"><- Home</button></h1>
        <div class="workCard">
            <div class="workCardContent">
                <img src="../img/guessMyNumber.png" alt="">
            </div>
            <a href="https://github.com/Dr1ftr/GuessMyNumber">Guess my number</a>
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
</script>