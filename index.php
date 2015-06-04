0
<?php

  if ($_POST["submit"]) {
    $name = $_POST["nome"];
    $email = $_POST["mail"];
    $texto = $_POST["texto"];
    $from = "CopyPoint Contact Form";
    $to = "copypoint@aeist.pt";
    $subject = $_POST["titulo"];
    $body = "From: $name\nEmail: $email\nMessage: $texto\n";
    if (mail($to,$subject,$body,$from)) {
      $result =  "<p><strong>Contacto enviado com sucesso! Seremos breves</strong></p>";
    } else {
      $result =  "<p><strong>Ocorreu um erro ao enviar o seu contacto.</strong></p>";
    }              
  }          
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <script type="text/javascript" src="js/jquery-2.1.3.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script>
    /*
    $('html, body').animate({scrollTop: $("#<id do div>").offset().top},600);

    */
    </script>
    <title>CopyPoint AEIST</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen"/>
  </head>
  <body onLoad="myFunction()">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" height="50" src="img/logo.png">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="info-nav active" id="nav1" target-div="info1"><a href="#">Home</a></li>
            <li class="info-nav" id="nav2" target-div="info2"><a href="#">Como Utilizar</a></li>
            <li class="info-nav" id="nav3" target-div="info3"><a href="#">Digitalizar</a></li>
            <li class="info-nav" id="nav4" target-div="info4"><a href="#">Fotocopiar</a></li>
            <li class="info-nav" id="nav5" target-div="info5"><a href="#">Imprimir</a></li>
            <li class="info-nav" id="nav6" target-div="info6"><a href="#">FAQ</a></li>
            <li class="info-nav" id="nav7" target-div="info7"><a href="#">Preçário</a></li>
            <li class="info-nav" id="nav8" target-div="info8"><a href="#">Contacto</a></li>

            
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div id="info1" target-nav="nav2" target-div="info2" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Home</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          <p>A AEIST revitalizou o AEIST Copypoint. Este projecto tem como objectivo permitir aos alunos imprimir, fotocopiar e digitalizar os seus documentos a qualquer hora, tendo estes acesso rápido e fácil a várias máquinas estrategicamente colocadas ao longo do <i>campus</i> Alameda.
          </p>
        </div>
        <div class="row">
          <div class="col-md-8">
            <p><h3>As máquinas encontram-se nos seguintes locais:</h3></br></p>
            <p>1- Pavilhão de Civil, na sala V0.05, conhecida como Aquário. Horário 24h por dia</p>
            <p>2- Torre Norte, no corredor de acesso às escadas para a cave, do ado esquerdo. Horário: dias úteis das 8:00h até às 20:00h</p>
            <p>3- Torre Sul no corredor do lado esquerdo do piso 0. Horário: dias úteis das 8:00 até às 20:00h</p>
            <p>4- No Pavilhão Central, irá ser colocada uma quarta máquina ao dispor dos alunos, junto à sala C01. Horário: dias úteis das 8:00h até às 20:00h</p>
          </div>
          <div class="col-md-4">
            <img src="img/alameda.jpg"/>
          </div>
        </div>
        <div class="row">
          <p></br>Cada aluno poderá registar-se nas Secção de Folhas para ter acesso a sua conta AEIST CopyPoint. A partir desse momento, poderá aceder à mesma no site <a target="_blank" href="http://imprimir.aeist.pt">http://imprimir.aeist.pt</a></p>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info2" target-nav="nav3" target-div="info3" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Como Utilizar</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          <p>1 - Dirige-te à Secção de Folhas para criares e validares a tua conta on-line. Para isso é necessário o teu ID do IST, e o teu e-mail que mais utilizas. É também aqui que podes efectuar os carregamentos necessários para realizares qualquer acção nas máquinas fotocopiadoras</p>

          <p>2- Depois de criares a tua conta pode aceder à mesma através do site <a target="_blank" href="http://www.imprimir.aeist.pt">www.imprimir.aeist.pt</a>. Aqui podes ver o saldo disponível, fazer uploads de ficheiros para as tuas impressões</p>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <img style="max-width: 100%" src="img/site_imprimir_login.jpg"/>
          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="row" style="height: 30px"></div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <img style="max-width: 100%" src="img/site_imprimir.jpg"/>
          </div>
          <div class="col-md-1"></div>      
        </div>
        <div class="row" style="height: 30px"></div>
        <div class="row">
          <p><h4>Para utilização das máquinas fotocopiadoras:</h4></p>


          <p>Para utilizares as máquinas, terás que iniciar a tua sessão na mesma, podes fazê-lo de duas maneiras:</p>

          <p>1- Manualmente, ou seja, basta introduzires o teu username e password, referentes à tua conta CopyPoint,no visor da máquina fotocopiadora.</p>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <img style="max-width: 100%" src="img/menu_login.jpg"/>
          </div>
          <div class="col-md-1"></div>
        </div>
        <div class="row" style="height:15px"></div>
        <div class="row">
          <p>2- Ou utilizar um cartão com funcionamento chip (por exemplo: cartão de aluno). Para usares este modo, é necessário primeiro, associar o cartão à tua conta. Passa o cartão pelo leitor, de seguida introduz no monitor os teus dados (username e password). A partir desse momento, para utilizares a máquina fotocopiador através deste modo, basta passares o cartão no leitor, não sendo preciso introduzires os teus dados novamente. Podes adicionar vários cartões à mesma conta.</p>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info3" target-nav="nav4" target-div="info4" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Digitalizar</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          Para tirares fotocópias dos teus documentos, depois de iniciares sessão, deves inserir os documentos na máquina fotocopiadora, e premir o botão correspondente a essa operação (Cópia) e de seguida carregares no botão azul (foto). Podes configurar a tua a nível de resolução, cor ou preto branco, luminosidade etc. Para saires da tua sessão, carrega no símbolo de saída que se encontra no monitor(símbolo de saída).
        </div>
        <div class="row">
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/printer_location.png">
            <legend>Dirige-te à impressora mais próxima</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/cartao.png">
            <legend>Passa o cartão associado à tua conta na impressora</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/scan.png">
            <legend>Insere o documento na máquina fotocopiadora</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/sel_documento.png">
            <legend>Premir o botão correspondente (SafeQ Scan)</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/botao_azul.jpg">
            <legend>Premir o botão azul</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/terminado.png">
            <legend>Retirar o documento</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%" src="img/botao_sair.jpg"/>
            <legend>Para terminares sessão, premir este botão no lado direito da máquina</legend>
          </div>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info4" target-nav="nav5" target-div="info5" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Fotocopiar</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          Para tirares fotocópias dos teus documentos, depois de iniciares sessão, deves inserir os documentos na máquina fotocopiadora, e premir o botão correspondente a essa operação (Cópia) e de seguida carregares no botão azul (foto). Podes configurar a tua a nível de resolução, cor ou preto branco, luminosidade etc. Para saires da tua sessão, carrega no símbolo de saída que e encontra no monitor(símbolo de saída).
        </div>
        <div class="row">
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/printer_location.png">
            <legend>Dirige-te à impressora mais próxima</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/cartao.png">
            <legend>Passa o cartão associado à tua conta na impressora</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/scan.png">
            <legend>Insere o documento na máquina fotocopiadora</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/sel_documento.png">
            <legend>Premir o botão correspondente (Cópia)</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/botao_azul.jpg">
            <legend>Premir o botão azul</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/terminado.png">
            <legend>Retirar o documento</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%" src="img/botao_sair.jpg"/>
            <legend>Para terminares sessão, premir este botão no lado direito da máquina</legend>
          </div>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info5" target-nav="nav6" target-div="info6" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Imprimir</strong></h1></div>
        <div class="row">
          Para fazeres o upload dos ficheiros que pretendes imprimir, inicia a tua sessão no site <a target="_blank" href="http://imprimir.aeist.pt">imprimir.aeist.pt</a> ,  e clica no botão “upload new print job”.  Nessa secção podes fazer o upload de um ou mais documentos. De seguida, dirigi-te a umas máquinas fotocopiadoras que se encontram no Campus, e inicia a tua sessão na mesma. Para imprimires os ficheiros, basta carregares no botão correspondente a essa função (SafeQ Print), e posteriormente seleccionar os ficheiros que pretendes imprimir (carregar em “Em fila de Espera”) de seguida premir o botão azul . Para saires da tua sessão, carrega no símbolo de saída que se encontra no monitor.
        </div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/pc_upload.png">
            <legend>Faz o upload do documento em imprimir.aeist.pt</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/printer_location.png">
            <legend>Dirige-te à impressora mais próxima</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/cartao.png">
            <legend>Passa o cartão associado à tua conta na impressora</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/sel_documento.png">
            <legend>Selecciona o documento a imprimir</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/botao_azul.jpg">
            <legend>Premir o botão azul</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%;" src="img/terminado.png">
            <legend>Retirar o documento</legend>
          </div>
          <div class="col-md-2">
            <img style="max-width: 100%" src="img/botao_sair.jpg"/>
            <legend>Para terminares sessão, premir este botão no lado direito da máquina</legend>
          </div>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info6" target-nav="nav7" target-div="info7" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>FAQ</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <ul id="topicos">
          <li><a><strong>É necessário ser sócio da AEIST para utilizar o serviço CopyPoint?</strong></a>
          <div>
            <p>- Não, para utilizares o serviço CopyPoint basta seres aluno do IST.</p>
          </div>
          </li>
          <li><a><strong>Que formato de folha é possível imprimir nas máquinas fotocopiadoras?</strong></a>
          <div>
            <p>- Nas máquinas fotocopiadoras podes imprimir em formato A4, as folhas são brancas e de 80g a gramagem.</p>
          </div>
          </li>
          <li><a><strong>Posso imprimir nas máquinas fotocopiadoras ficheiros a partir de pen USB?</strong></a>
          <div>
            <p>- Não, o sistema está bloqueado para as pen USB ou qualquer outro dispositivo, por uma questão de segurança.</p>
          </div>
          </li>
          <li><a><strong>Quais os formatos que posso fazer upload?</strong></a>
          <div>
            <p>- Os formatos  que podes fazer upload são os seguintes: PDG,DOC, PDF, JPEG e PNG.</p>
          </div>
          </li>
        </ul>

        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info7" target-nav="nav8" target-div="info8" class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Preçário</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Fotocópia/Impressão</th>
                <th>Preço/Unidade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Frente A4 Preto e Branco</td>
                <td>0,05€</td>
              </tr>
              <tr>
                <td>Frente e VersoA4 Preto e Branco</td>
                <td>0,08€</td>
              </tr>
              <tr>
                <td>Frente A4 Cores</td>
                <td>0,21€</td>
              </tr>
              <tr>
                <td>Frente e Verso A4 Cores</td>
                <td>0,35€</td>
              </tr>
            </tbody>
            <thead>
              <tr>
                <th>Digitalização</th>
                <th>Preço/Unidade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Frente A4</td>
                <td>0,01€</td>
              </tr>
              <tr>
                <td>Frente A3</td>
                <td>0,02€</td>
              </tr>
              <tr>
                <td>Frente e VersoA4</td>
                <td>0,02€</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <div id="info8"class="info container-fluid">
      <div class="container">
        <div class="row" style="height:60px"></div>
        <div class="row"><h1><strong>Contactos</strong></h1></div>
        <div class="row" style="height:30px"></div>
        <div class="row">
          <form class="form-horizontal" role="form" method="post" action="index.php">
            <fieldset>
<!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="nome">Nome</label>
                <div class="controls">
                  <input id="nome" name="nome" placeholder="Introduza o seu nome" class=" form-control" required="" type="text">
                </div>
              </div>

              <!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="mail">Email</label>
                <div class="controls">
                  <input id="mail" name="mail" placeholder="Introduza o seu email" class=" form-control" required="" type="text">
                </div>
              </div>


<!-- Text input-->
              <div class="control-group">
                <label class="control-label" for="titulo">Título</label>
                <div class="controls">
                  <input id="titulo" name="titulo" placeholder="Introduza o título" class=" form-control" required="" type="text">
                </div>
              </div>


              <!-- Textarea -->
              <div class="control-group">
                <label class="control-label" for="textarea">Texto</label>
                <div class="controls">
                  <textarea class="form-control" id="texto" name="texto"></textarea>
                </div>
              </div>

<!-- Button -->
              <div class="control-group">
                <label class="control-label" for="submit">Submeter</label>
                <div class="controls">
                  <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="row">
          <?php echo $result; ?>
        </div>
        <div class="row" style="height: 60px"></div>
      </div>
    </div>
    <script>
        var previousDiv = null;
        var previousMargin = 0;
        var windowHeight = $(window).height();
        var i = 1;
        $(".info").each(function() {
          var height = $(this).height();
          if (height < windowHeight) {
            var margin = (windowHeight - height) / 4;
            if (this.id == "info8"){
              $(this).css("margin","150px 0 50px 0");
            }
            else if (this.id == "info1"){
              $(this).css("margin-top","150px");
            }
            else {
              $(this).css("margin", "250px 0");
              previousMargin = margin;
            }
          }
        });
    </script>

    <img id="uparrow" src="img/up_arrow.png" style="position: relative; bottom: 20px" width="75px"></img>
    <script>
      var width = ($(window).width() - 75) / 2;
      $("#uparrow").css("left",width + 'px');
    </script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
