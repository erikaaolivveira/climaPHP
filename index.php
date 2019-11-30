<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Informações climáticas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



        <script src="js/clima.js"></script>
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas de Brusque e região"/>
        <meta NAME="ABSTRACT" CONTENT="Informações climáticas"/>
        <meta name="keywords" content="clima, temperatura, temperatura em Brusque, tempo para Brusque, clima Brusque, tempo Brusque, temperatura máxima, temperatura mínima, informações de clima, informações de temperatura, clima município, Brusque tempo, umidade Brusque, informações tempo, tempo clima"/>
        <meta NAME="title" CONTENT="Informações climáticas" />
        <meta NAME="identifier-url" content="https://erika123.herokuapp.com/" />
        <meta NAME="author" content="Érika Oliveira" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="erika_s_oliveira@estudante.sc.senai.br"/>

        <meta property="og:url" content="https://erika123.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="" />
        <meta property="og:title" content="" />
        <meta property="og:description" content="Site de informações climáticas" />
        <meta property="og:image" content="https://erika123.herokuapp.com/img/icones/13n.png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:title" content="" />

    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron bg-info">
                    <h1>Tempo para brusque-SC | <span id="temperatura"></span></h1>

                    <p>
                        <span id="situacao"></span>
                        <img src="img/icones/02d.png"/>
                    </p>




                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>Umidade do ar | <span id="umidade"></span></h2>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/50d.png" width="50px">
                        </div>
                        <div class="col">
                            <h2>Pressão do ar | <span id="pressaoVento"></span></h2>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/10d.png" width="50px">
                        </div>
                        <div class="col">
                            <h2>Temperatura Máxima | <span id="tempMax"></span></h2>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/09d.png" width="50px">
                        </div>
                        <div class="col">
                            <h2>Temperatura Mínima | <span id="tempMin"></span></h2>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/01n.png" width="50px">
                        </div>
                        <div class="col">
                            <h2>Velocidade do vento | <span id="velocidadeVento"></span></h2>
                            <p>
                                <span id="situacao"></span>
                                <img src="img/icones/13n.png" width="50px">
                        </div>

                        <p>
                            <span id="situacao"></span>
                            <img id="icone"
                        </p>
                    </div>
                </div>
            </div>
    </body>
</html<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/clima.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron"  >
                    <h1 class="alert alert-warning" > Tempo para Brusque-SC | <span id="temperatura"></span> </h1>
                    <p>
                        <span id="situacao"> </span>
                        <img src="img/icones/02d.png"/>
                    </p>
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h5>
                                    <center>
                                        <p class="alert alert-danger" >
                                            Temperatura Máxima |<span id="temperaturaMax"></span>
                                            <span id="situacao"> </span>
                                            <img src="img/icones/temp1.png" width="40"/>
                                        </p>
                                    </center>
                                </h5>
                            </div>
                            <div class="col-md-6" >
                                <h5>
                                    <center>
                                        <p class="alert alert-info" >
                                            Temperatura Mínima | <span id="temperaturaMin"></span>
                                            <span id="situacao"> </span>
                                            <img src="img/icones/temp2.png" width="40"/>
                                        </p>
                                    </center>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4" >
                                <center>
                                    <p class="alert alert-success" >
                                        <strong> Umidade do Ar |<span id="umidade"></span></strong> 
                                        <span id="situacao"> </span>
                                        <img src="img/icones/umid.png" width="47"/>
                                    </p>
                                </center>
                            </div>
                            <div class="col-md-4">
                                <center>
                                    <p class="alert alert-dark" >
                                        <strong>Pressão do Ar |<span id="pressao"></span></strong>
                                        <span id="situacao"> </span>
                                        <img src="img/icones/pressao.jpg" width="40"/>
                                    </p>
                                </center>
                            </div>
                            <div class="col-md-4" >
                                </center>
                                <p class="alert alert-primary" >
                                    <strong>Velocidade do Vento | <span id="vento"></span></strong>
                                    <span id="situacao"> </span>
                                    <img src="img/icones/vento.png" width="48"/>
                                </p>
                                </center>
                            </div>



                            <div class="container">
                                <div class="row">
                                    <div class="col-6" >
                                        <center>
                                            <p class="alert alert-warning" >
                                                <strong> Amanhecerr |<span id="amanhecer"></span></strong> 
                                                <span id="situacao"> </span>
                                                <img src="img/icones/nascer.png" width="47"/>
                                            </p>
                                        </center>
                                    </div>




                                    <div class="col-md-6" >
                                        <h5>
                                            <center>
                                                <p class="alert alert-secondary" >
                                                    Por do Sol | <span id="anoitecer"></span>
                                                    <span id="situacao"> </span>
                                                    <img src="img/icones/porsol.png" width="50"/>
                                                </p>
                                            </center>
                                        </h5>
                                    </div>
                                </div>























                            </div>  
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
