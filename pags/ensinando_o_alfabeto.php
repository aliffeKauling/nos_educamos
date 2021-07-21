<?php
session_start();
?>



<?php include('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
  <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>
<h1 class="text-center">Ensinando o alfabeto</h1>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 50">
  <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>

<!--Azul-->

<section class="services gradient ">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
    <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
  </svg>

  <div class="container-fluid">
    <div class="row align-items-center justify-content-center container-fluid">
      <div class="col-md-5 text-left">
        <h1>Dicas dos profissionais</h1>
        <p>
          Nesta seção, você encontra dicas e experiências de
          profissionais que trabalham na educação, saúde e afins.
        </p>
      </div>
    </div>
    <div class="col-md-5"><img class="container-fluid" src="components/img/Teacher_Isometric.svg" alt="" /></div>
    <p></p>

    <!--Conteúdo do estático-->


    <div class="row align-items-center justify-content-center container-fluid">
      <div class="col-md-5">
        <h2>Maiara dos reis</h2>

        <p>
          Olá, sou professora de educação infantil e hoje quero compartilhar esse link, com diversos alfabetos estilizados,
          de heróis, princesas e outros desenhos animados.
          As letras estilisadas, é uma maneira lúdica de trazer a atenção da criança para aprender o alfabeto.
        </p>

        <a href="https://www.google.com/search?q&tbm=isch&ictx=1&tbs=rimg:CR36iFEmmhvxIggd-ohRJpob8SoSCR36iFEmmhvxEYmm6r2E86VS&hl=pt-BR&sa=X&ved=2ahUKEwjxiN39keXvAhWBLrkGHeybCGUQiRx6BAgAEAQ&biw=1287&bih=697"><button type="button" class="btn btn-outline-warning mb-3">
            Ver link
          </button></a>
      </div>
      <div class="col-md-5"><img class="container-fluid" src="components/img/sala_de_aula.svg" alt="" /></div>
      <div class="col-md-5"><img class="container-fluid" src="components/img/Science_Monochromatic.svg" alt="" /></div>
      <div class="col-md-5 container-fluid">

        <h1>Larissa Alves</h1>

        <p>
          A maioria das crianças começa a reconhecer algumas letras entre as idades de 2 e 3 anos,
          e por volta dos 5 anos já consegue identificar praticamente o alfabeto completo.
          Isso significa que é possível começar a ensinar o alfabeto desde cedo, por volta dos 2 anos,
          mas não se deve exigir da criança o domínio completo por algum tempo...
        </p>
        <a href='pags/ensinar.php'><button type="button" class="btn btn-outline-warning mb-3">
            Ver mais
          </button></a>
      </div>
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
    <img src = "/educa_juntos/pags/imagens/<?php //echo $row[2]; 
                                            ?>" class="img-fluid rounded"></div>
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
    <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
  </svg>
</section>

<!--Azul-->

<div class="container-fluid">
  <div class="row align-items-center justify-content-center container-fluid">
    <div class="col-md-5 text-left container-fluid">
      <h1>Comunidade</h1>
      <p>
        Na nossa comunidade, um verdadeiro ecossistema online,
        você vai encontrar outras pessoas, que assim como você, ajudam crianças em suas tarefas do colégio (principalmente agora no período de pandemia) e que passam por desafios e
        superações diariamente.
        Veja o que nossa comunidade está dizendo e não deixe de compartilhar sua experiência, no fim da página.
      </p>
    </div>
  </div>
  <div class="col-md-5"><img class="container-fluid" src="components/img/Share_Outline.svg" alt="" /></div>
  <p></p>

  <!--Conteúdo do banco-->
  <div class="row align-items-center justify-content-center container-fluid">
    <div class="col-md-5 container-fluid">
      <?php
      $link = mysqli_connect("localhost", "root", "", "educa");
      $query = "SELECT nome, depoimento, imagem FROM depoimento WHERE pagina = 'ensinando_o_alfabeto' ORDER BY nome";
      $result = mysqli_query($link, $query);

      while ($row = mysqli_fetch_row($result)) {

        echo "<h2>" . $row[0] . "</h2>";
        echo "<p>" . $row[1] . "</p>";
      ?>
        <div class="col-md-8 container-fluid">
          <img src="/educa_juntos/pags/imagens/<?php echo $row[2]; ?>" class="img-fluid rounded">
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
          <path fill="#fff" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,80C384,75,480,85,576,112C672,139,768,181,864,181.3C960,181,1056,139,1152,122.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

    </div>
    <div class="col-md-5 container-fluid">
      <p></p>

    <?php
      }
      mysqli_close($link);
    ?>
    </div>

  </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 210">
  <path fill="#2F36DF" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
</svg>
</section>





<!--Formulário compartilhar-->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
  <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
</svg>
</section>


<section class="contact "> 
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 container-fluid">
        <form class="container-fluid" method="post" action="proc_cad_img.php" enctype="multipart/form-data">
          <h1>Compartilhe sua experiência:</h1>
          <?php
          if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          ?>
          <div class="mb-3 container-fluid">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" />
          </div>
          <div class="mb-3 container-fluid">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" name="depoimento" placeholder="Conte algo para nós" rows="3"></textarea>
          </div>
     
          <div class="mb-3 container-fluid">
            <label for="exampleFormControlTextarea1" class="form-label container-fluid">Foto
            </label>
            <input class="container-fluid" type="file" name="imagem" />
          </div> 

          <p></p>
          <input type="hidden" name="pagina" value="ensinando_o_alfabeto"></input>
          </input>
          <input class="btn btn-success btn-lg container-fluid" name="SendCadImg" type="submit" value="Cadastrar">
      </div>
      </form>

      <div class="col-md-6 row align-items-center justify-content-center container-fluid">
        <img class="container-fluid" src="/educa_juntos/img/compartilhar.svg" alt="Contact image" />
      </div>
    </div>
  </div>
</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
  <path fill="#fff" fill-opacity="1" d="M0,96L34.3,106.7C68.6,117,137,139,206,122.7C274.3,107,343,53,411,53.3C480,53,549,107,617,117.3C685.7,128,754,96,823,96C891.4,96,960,128,1029,154.7C1097.1,181,1166,203,1234,202.7C1302.9,203,1371,181,1406,170.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
</svg>


<?php require('components/footer.inc.php'); ?>