<?php
    //Configurando o fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //Obtendo os meses anteriores e posteriores
    if(isset($_GET['$mes'])) {
      echo $_GET['$mes'];
    }
    else {
        $mes = date('Y - m');
    }

    //Checando o formato da hora   

    $timestamp = strtotime($mes . '-01');
    if ($timestamp === false) {
      $mes = date('Y-m-d');
    }
    echo $timestamp;
    
    //setando o dia atual
    $hoje = date('Y-m -j', time());

    //Setando o titulo da tag <h3>
    $titulo = date('Y-m', $timestamp);

    //Criando os links dos meses anteriores e posteriores
    //mktime(hour, minute, second, month, day, year)
    $anterior = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1 date('Y', $timestamp)));
    $proximo = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

    //Contagem dos dias do mes
    $cont_dias = date('t', $timestamp);

    //Definindo os dias da semana -> 0:Dim 1:Seg 2:Ter 3:Qua 4:Qui 5:Sex 6:Sab
    $dias = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp))); 

    //Criando o calendario


?>