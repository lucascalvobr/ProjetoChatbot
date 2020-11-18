<?php
include "Bot.php";

$bot = new Bot;
$questions = [
    "localidade" => "Rua Akida Ban 666 Capinho Quadrado - Taboão das Trevas - SP",
    "serviços" => "Lavagem de placa<br>Aquecimento de placa<br>Reparo em HD",
    "preços" => " Coisa simples: R$ 50,00<br>Fulano faz por tanto: R$ 110,00<br>Eu mesmo troquei: R$ 85,00<br>Peguei na internet: R$ 50,00<br>
    Parou de funcionar sozinho: R$ 450,00 + peças<br>O filho do vizinho entende pra caramba: R$ 92,00<br>Favor para amigo: R$ 70,00<br>O aparelho não tem nada é só um 'detalhezinho': R$ 90,00",
    "prazo" => "Pra ontem: 7 dias<br>Pra hoje: 15 dias<br>Sem pressa: 1 dia",
    "formas de envio" => "Navio (MG)<br>Dinossauro (AC)<br>Via bala perdida (RJ)<br>Mobilete (Demais localidades)",
    "qual seu nome" => "Meu nome é " . $bot->getName(),
];

/*
Carregamento de dados via JSON

$obj = json_decode(file_get_contents('regras.json'), True);
$questions = array();
foreach ($obj as $values) {
    foreach ($values as $key => $value) {
        $questions[$key] = $value;
    }
}
*/

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;

        


        $generics = ['oi', 'oie', 'ola', 'olá', 'bom dia', 'boa tarde', 'boa noite'];
        if (in_array($msg, $generics)) {
            $botty->reply('Olá. Em que posso ajudar?');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, não entendi.");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}
