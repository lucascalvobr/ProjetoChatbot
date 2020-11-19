// Slider
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " w3-white";
}





// ChatBot
const btnSend = document.getElementById("btn");
const chat = document.getElementById("chat");

const getMessage = (msg) => {
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const response = xhr.responseText;
            const chatBody = document.querySelector(".scroller");

            const divCpu = document.createElement("div");
            divCpu.className = "bot visible";
            divCpu.innerHTML = response;

            const divUser = document.createElement("div");
            divUser.className = "me visible";
            divUser.textContent = msg;

            chatBody.append(divUser);
            setTimeout(() => {
                chatBody.append(divCpu);
                scrollDown();
            }, 600);
        }
    };

    xhr.open("GET", "bot/chat.php?msg=" + msg, true);
    xhr.send();
};

btnSend.addEventListener("click", (e) => {
    e.preventDefault();
    scrollDown();
    if (chat.value == "") {} else {
        getMessage(chat.value);
        chat.value = "";
    }
});

function scrollDown() {
    $('.body').animate({
        scrollTop: $(this).height() // aqui introduz o numero de px que quer no scroll, neste caso é a altura da propria div, o que faz com que venha para o fim
    }, 100);
}