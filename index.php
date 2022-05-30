<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="index open" id="index">
        <img src="../img/me.jpeg" alt="" class="avatar">
        <h1>Jasper Rijsbaarman</h1>
        <div class="divider"></div>
        <h1><a href="../aboutMe.php">About me</a></h1>
        <h1><a href="">My work</a></h1>
        <button onclick="switchView(index)">Test</button>
    </div>
</body>
</html>

<script>
    function switchView(divId, targetDivId) {
        divId.classList.remove('open')
        divId.classList.add('hide')
        setTimeout(function(params) {
            divId.classList.add('hidden')
            divId.classList.remove('hide')
        }, 3000);
    }
    function show(divId) {
        divId.classList.remove('hide')

        divId.classList.add('open')
    }
</script>