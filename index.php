<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência Técnica - ConsertaTECH</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/w3css.css">
    <link rel="shortcut icon" href="img/logo.png">
</head>

<body>
    <div class="content">
        <div class="bannerArea">
            <img src="./img/banner.png" alt="">
        </div>
    </div>
    <div class="menuArea">
        <img src="./img/logo.png" alt="">
        <ul>
            <li><a href="index.php" class="anchor active">HOME</a></li>
            <li><a href="#quemSomosArea" class="anchor">QUEM SOMOS</a></li>
            <li><a href="#imagens" class="anchor">IMAGENS</a></li>
            <li><a href="#chatt" class="anchor">CHAT</a></li>
        </ul>
    </div>
    <div class="quemSomosArea" id="quemSomosArea">
        <div class="qsColumns">
            <div class="qsImg" id="qsImg-1"></div>
            <p>
                Lavagem de Placas.
            </p>
        </div>
        <div class="qsColumns">
            <div class="qsImg" id="qsImg-2"></div>
            <p>
                Aquecimento de Placas.
            </p>
        </div>
        <div class="qsColumns">
            <div class="qsImg" id="qsImg-3"></div>
            <p>
                Reparo em HD's.
            </p>
        </div>
    </div>

    <div class="w3-content w3-display-container" style="width: 95%;" id="imagens">
        <img class="mySlides" src="./img/imgCarrosel1.png" style="width:100%">
        <img class="mySlides" src="./img/imgCarrosel2.png" style="width:100%">
        <img class="mySlides" src="./img/imgCarrosel3.png" style="width:100%">
        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle"
            style="width:100%; background: transparent;">
            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        </div>
    </div>

    <div class="chatBotArea">
        <h4 id="chatt">ChatBot</h4>
        <div class="chatArea">
            <div class="chatbox">
                <div class="header">
                    <h4>ChatBot ConsertaTECH</h4>
                    <br>
                    <p>Faça perguntas como as descritas no ChatBot</p>
                </div>
                <div class="body" id="chatbody">
                    <div class="scroller"></div>
                </div>
                <form class="chat" method="post" autocomplete="off">
                    <div>
                        <input type="text" name="chat" id="chat" placeholder="Digite aqui sua mensagem...">
                    </div>
                    <div>
                        <input type="submit" value="Enviar" id="btn">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="mapa"></div>
        <div class="endereco"></div>
        <div class="direitos"></div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/app.js"></script>

    <script>
        divCpu = document.createElement("div");
        chatBody = document.querySelector(".scroller");
        divCpu.className = "bot visible";
        divCpu.innerHTML = "Olá, escreva uma das opções abaixo:<br><br>Localidade<br>Serviços<br>Preços<br>Prazo<br>Formas de envio";
        chatBody.append(divCpu);


        $('.menuArea a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;
            
        $('html, body').animate({ 
            scrollTop: targetOffset - 100
        }, 500);
        });

        var anchor = document.querySelectorAll('.anchor');

        $(anchor).on('click', e => {
            anchor.forEach(item => {
                item.className = 'anchor';
            })
            e.target.className = 'anchor active';
        });

    </script>
</body>

</html>