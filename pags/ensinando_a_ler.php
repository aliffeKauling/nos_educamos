<?php
          session_start();
?>
<?php include('components/navbar.inc.php'); ?>
<?php include('components/head.inc.php'); ?>




<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>
            <h1 class="text-center">Ensinando à Ler</h1>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>

<!--Azul-->
    <section class="services gradient ">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
            <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 text-left ">
            <h1>Dicas dos profissionais</h1>
            <p >
            Nesta seção, você encontra dicas e experiências de 
            profissionais que trabalham na educação, saúde e afins.
            </p>       
          </div>
          </div>
          <div class="col-md-5"><img src="components/img/Teacher_Isometric.svg" alt="" /></div>
          <p></p>

<!--Conteúdo do estático-->


<div class="row align-items-center justify-content-center">
          <div class="col-md-5">
            <h1>Jéssica dos Santos</h1>

            <p>
            Começar a reconhecer as letras é o primeiro passo para aprender a ler e escrever.
            É comum as crianças demonstrem curiosidade sobre as letras que formam o seu nome e suas palavras preferidas, 
            como nomes dos animais, das cores, dos pais… 
            </p>

            <a href='pags/ensinar.php'><button type="button" class="btn btn-outline-warning mb-3" >
            Ver mais
            </button></a>
          </div>
          <div class="col-md-5"><img src="components/img/sala_de_aula.svg" alt="" /></div>
          <div class="col-md-5"><img src="components/img/Science_Monochromatic.svg" alt="" /></div>
          <div class="col-md-5">

            <h1>Larissa Alves</h1>

            <p>
            A maioria das crianças começa a reconhecer algumas letras entre as idades de 2 e 3 anos, 
            e por volta dos 5 anos já consegue identificar praticamente o alfabeto completo. 
            Isso significa que é possível começar a ensinar o alfabeto desde cedo, por volta dos 2 anos, 
            mas não se deve exigir da criança o domínio completo por algum tempo...
            </p>
            <a href='pags/ensinar.php'><button type="button" class="btn btn-outline-warning mb-3" >
            Ver mais
            </button></a>
          </div>
          <div class="col-md-5">


            <h1>Leandro Marques</h1>

            <p>
            Para ler, iniciar com as vogais!
            Uma letra de cada vez... Separe atividades com traçado das letras (caixa alta),
            figuras que iniciam com aquela letra, ditado com alfabeto móvel... Tem bastante atividade disponível na internet!
            </p>
            <button type="button" class="btn btn-outline-light mb-3">
            Ver mais
            </button>
          </div>
          <div class="col-md-5"><img src="img/revenue_.svg" alt="" /></div>
        </div>
      </div>




<!--Conteúdo do banco
          <div class="row align-items-center justify-content-center">
              <div class="col-md-6">  
                 <?php
  // $link = mysqli_connect("localhost", "root", "", "educa");
  //$query = "SELECT nome, depoimento, imagem FROM depoimento WHERE pagina = 'pagina_abc copy' ORDER BY nome";
  //$result = mysqli_query($link, $query);
  
//  while ($row = mysqli_fetch_row($result) ) {
  
  //  echo "<h2>".$row[0]."</h2>";
  //  echo "<p>".$row[1]."</p>";
    ?>
    <div class="col-md-8">
    <img src = "/educa_juntos/pags/imagens/<?php //echo $row[2]; ?>" class="img-fluid rounded"></div>
  <p></p>
    </div>
    <div class="col-md-5">
    <p></p>

      <?php   
  //}
//  mysqli_close($link);
?>
</div>
          </div>
</div>
-->
       





<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>

<!--Azul-->

    <div class="container">
<div class="row align-items-center justify-content-center">
          <div class="col-md-5 text-left">
            <h1>Comunidade</h1>
            <p >
            Na nossa comunidade, um verdadeiro ecossistema online, 
            você vai encontrar outras pessoas, que assim como você, ajudam crianças em suas tarefas do colégio (principalmente agora no período de pandemia) e que passam por desafios e 
            superações diariamente.
            Veja o que nossa comunidade está dizendo e não deixe de compartilhar sua experiência, no fim da página.
            </p>       
          </div>
          </div>
          <div class="col-md-5"><img src="components/img/Share_Outline.svg" alt="" /></div>
          <p></p>

<!--Conteúdo do banco-->
          <div class="row align-items-center justify-content-center">
              <div class="col-md-5">  
                 <?php
   $link = mysqli_connect("localhost", "root", "", "educa");
  $query = "SELECT nome, depoimento, imagem FROM depoimento WHERE pagina = 'ensinando_a_ler' ORDER BY nome";
  $result = mysqli_query($link, $query);
  
  while ($row = mysqli_fetch_row($result) ) {
  
    echo "<h2>".$row[0]."</h2>";
    echo "<p>".$row[1]."</p>";
    ?>
    <div class="col-md-8">
    <img src = "/educa_juntos/pags/imagens/<?php echo $row[2]; ?>" class="img-fluid rounded"></div>
  <p></p>
    </div>
    <div class="col-md-5">
    <p></p>
 
      <?php   
  }
  mysqli_close($link);
?>
</div>

          </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
        <path
          fill="#2F36DF"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>





<!--Formulário compartilhar-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>


    <section class="contact">
      <div class="container justify-content-center">
        <div class="row">
          <div class="col-md-5">
          <form method="post" action="proc_cad_img.php" enctype="multipart/form-data"> 
            <h1>Compartilhe sua experiência:</h1>
            <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Nome:</label
              >
              <input
                type="text"
                class="form-control"
                name="nome"
                placeholder="Maria Aparecida"
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Conte algo para nós:</label
              >
              <textarea
                class="form-control"
                name="depoimento"
                rows="3"
              ></textarea>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Foto:
              </label>        
            <input type="file" name="imagem"/>
            </div>
            <p></p>
            <input type="hidden" name="pagina" value="ensinando_a_ler"></input>
           </input>         
           <input class="btn btn-success btn-lg" name="SendCadImg" type="submit" value="Cadastrar">
          </div>
          </form>
        
          <div class="col-md-6 row align-items-center justify-content-center">
            <img src="/educa_juntos/img/compartilhar.svg" alt="Contact image" />
          </div>
        </div>
      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"
        ></path>
      </svg>

<?php require('components/footer.inc.php'); ?>