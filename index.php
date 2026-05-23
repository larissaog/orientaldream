

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrientalDream</title>
    <link rel="shortcut icon" href="img/loguinho.png" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

      <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      <nav>
        <p class="logo">OrientalDream | Sonho Oriental</p>
        <div class="mobile-menu">
          <img src="./img/menu.png" alt="" class="icon-open">
           <img src="./img/cancelar.png" class="icon-close">
        </div>
        <div class="nav-list">
          <div class="sublist">
            </div>
            <div class="buttons">
             <a href="./loginOrientalDream/cadastro/cadastro.php"> <button class="button-nav1">Cadastro</button></a>
            <a href="./loginOrientalDream/login/login.php"><button class="button-nav">Login</button></a>
        </div>

         <!-- EXTRA que só aparece quando o menu abre -->
        <div class="extra-content">
          <div class="navpai">
             <div class="imgs">
              <!-- <img src="./img/settings_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" height="25px" class="imgcolor"> <a href=""><p>Configurações</p></a> -->
              </div>
             <!-- <div class="imgs"><img src="img/build_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="" class="imgcolor" height="25px"><a href=""><p>Ferramentas</p></a></div>  -->
              <div class="imgs"><img src="img/info_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt=""class="imgcolor" height="25px"><a href="informações/informacoes.html"><p>Informações</p></a></div>
              <div class="imgs"><img src="img/lock_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt=""class="imgcolor" height="25px"><a href="segurança/seguranca.html"><p>Segurança</p></a></div>
           
          
          </div>

          <div class="paisociais">
            <a href=""><img src="img/email (1).png" alt=""></a>
            <a href=""><img src="img/chamada-telefonica.png" alt=""></a>
            <a href=""><img src="img/instagram (4).png" alt=""></a>
            <a href=""><img src="img/facebook (2).png" alt=""></a>
          </div>
           

            

            
            
        </div>
            </div>
            
      </nav>
    </header>

    <section class="banner">

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/propaganda1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/propaganda2.png" class="d-block w-100" alt="...">
    </div>
     <div class="carousel-item">
      <img src="./img/propaganda3 (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/propaganda4.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
 
    </section>
    <section>
      <div class="carr">
       <a href="carrinho.php"> <img src="img/shopping_cart_42dp_E3E3E3_FILL0_wght400_GRAD0_opsz40.png" alt="" class="carr-fig"></a>
      </div>
    </section>
<section>
  <div class="container mt-5">
    <div class="row">
      <div class="col text-center">
        <h2 class="bemvindo">Bem-vindo(a) ao OrientalDream</h2>
        <p class="lead">Seu destino para produtos orientais autênticos e de alta qualidade.<br>Com um toque de sofisticação e enviado pelos melhores fornecedores.</p>
    </div>
  </div>
</section>


<section class="barrapesquisa-principal">
  <!-- Removemos o form e deixamos apenas uma div para evitar que a página recarregue -->
  <div class="pesq">
    <input type="text"
           class="input-pesquisa"
           id="pesquisa"
           placeholder="Pesquisar produtos..."
           onkeyup="pesquisarProduto()"> <!-- Chama a função JS a cada letra digitada -->

    <button type="button" class="buttonpesquisa" onclick="pesquisarProduto()">
      Pesquisar
    </button>
  </div>
</section>

<div id="no-results-message" style="display: none;"></div>

<!-- COMEÇO DO CARD 1 -->

<section class="card1" id="secao-comidas">
 <div class="infos-card">
  <h3 class="titlecards">Comidas</h3>
  <!-- <div class="search-wrapper">
    <input type="text" placeholder="Pesquise pelo seu produto" class="input1" id="inputPesquisa">
    <button class="btn-search" onclick="pesquisarProduto()">🔍</button>
  </div> -->
  <!-- Note o 'this' e o 'data-target-section' -->
<select name="filtro" onchange="aplicarOrdenacaoPreco(this)" data-target-section="secao-comidas">
  <option value="relevante">Relevante</option>
  <option value="maior_preco">Maior preço</option>
  <option value="menor_preco">Menor preço</option>
</select>

</div>

  </div>

<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide product-card" data-original-order="1">
      <div class="card" data-nome="Chá verde" data-preco="25.00" data-categoria="Comidas">
        <img src="./img/chaverde.webp" class="card-img-top" alt="..." height="275px">
        <div class="card-body">
          <h5 class="card-title"><strong>Chá verde</strong></h5>
          <p class="card-text">Itoen.</p>
          <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver produto
</button></div>
 
        </div>
      </div>
    </div>

    
    <div class="swiper-slide product-card" data-original-order="2">
      <div class="card" data-nome="Caldo Base Men Tsuyu | Ichibiki | Japan Store" data-preco="20.00" >
        <img src="./img/caldo.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>Caldo Base Men Tsuyu | Ichibiki | Japan Store</strong></h5>
          <p class="card-text">Ichibiki.</p>
              <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal1">Ver produto
</button></div>
 
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="3">
       <div class="card" data-nome="MACARRÃO CHAMPON 170G ITSUKI" data-preco="25.00">
   <img src="./img/macarrao1.jpg" class="card-img-top" alt="..." height="275px">
   <div class="card-body">
     <h5 class="card-title"><strong>MACARRÃO CHAMPON 170G ITSUKI</strong></h5>
     <p class="card-text">Itsuki.</p>
     <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal2">Ver produto
</button></div>
 
</button>
   </div>
 </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="4">
       <div class="card" data-nome="Arroz Japonês Guin - 1kg" data-preco="30.00">
   <img src="./img/arroz.jpg" class="card-img-top" alt="..." height="272px">
   <div class="card-body">
     <h5 class="card-title"><strong>Arroz Japonês Guin - 1kg</strong></h5>
     <p class="card-text">Guin.</p>
      <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal3">Ver produto
</button></div>
 
</button>
   </div>
 </div>
    </div>


     <div class="swiper-slide product-card" data-original-order="5">
             <div class="card" data-nome="Salgadinho Coreano Cuttlefish Sabor Lula Nongshim 55g" data-preco="13.00">
   <img src="./img/salgadino coreano.png" class="card-img-top" alt="..." height="250px">
   <div class="card-body">
     <h5 class="card-title"><strong>Salgadinho Coreano Cuttlefish Sabor Lula Nongshim 55g</strong></h5>
     <p class="card-text">Nongshim.</p>
     <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal4">Ver produto
</button></div>
 
</button>
   </div>
 </div>
    </div>


     <div class="swiper-slide product-card" data-original-order="6">
      <div class="card" data-nome="Lamen Coreano Jin Ramen Mild Ottogi 120g" data-preco="7.00">
        <img src="./img/lamencoreano.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>Lamen Coreano Jin Ramen Mild Ottogi 120g</strong></h5>
          <p class="card-text"> Ottogi.</p>
     <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal5">Ver produto
</button></div>
 
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="7">
      <div class="card" data-nome="Suco de Uva com Coco 238ml Haitai Coréia do Sul" data-preco="9.00">
        <img src="./img/refri.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>Suco de Uva com Coco 238ml Haitai Coréia do Sul</strong></h5>
          <p class="card-text">Haitai.</p>
    <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal6">Ver produto
</button></div>
 
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="8">
      <div class="card" data-nome="SAMYANG BULDAK CARBONARA HOT CHICKEN 130GR" data-preco="7.50">
        <img src="./img/carbonara.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>SAMYANG BULDAK CARBONARA HOT CHICKEN 130GR</strong></h5>
          <p class="card-text">Samyang.</p>
     <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal7">Ver produto
</button></div>
 
        </div>
      </div>
    </div>




  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
</section>


<!-- modais do primeiro grupo de card -->

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chá verde</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/chaverde.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Chá verde">
              <input type="hidden" name="preco" value="25.00">
              <input type="hidden" name="imagem" value="chaverde.webp">

              <p>
                <strong>Descrição:</strong>
                Chá verde japonês de alta qualidade...
              </p>

              <p><strong>Preço:</strong> R$ 25,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>


<!-- modal1  f-->
 <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Caldo Base Men Tsuyu | Ichibiki | Japan Store</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/caldo.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Caldo Base Men Tsuyu | Ichibiki | Japan Store">
              <input type="hidden" name="preco" value="20.00">
              <input type="hidden" name="imagem" value="caldo.webp">

              <p>
                <strong>Descrição:</strong>
                Caldo base japonês tradicional, com sabor equilibrado e marcante. Ideal para preparo de macarrões como soba e udon, além de molhos e receitas típicas, trazendo praticidade e autenticidade à culinária japonesa.

              </p>

              <p><strong>Preço:</strong> R$ 20.00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>
 
<!-- modal2 f-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">MACARRÃO CHAMPON 170G ITSUKI
</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/macarrao1.jpg" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="MACARRÃO CHAMPON 170G ITSUKI
">
              <input type="hidden" name="preco" value="25.00">
              <input type="hidden" name="imagem" value="macarrao1.jpg">

              <p>
                <strong>Descrição:</strong>
                Macarrão japonês tradicional, de textura macia e sabor neutro, ideal para o preparo do clássico champon e outras receitas orientais. Versátil e prático, é perfeito para quem busca autenticidade e qualidade na culinária japonesa.

              </p>

              <p><strong>Preço:</strong> R$ 25,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>


<!-- modal3 -->
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Arroz Japonês Guin - 1kg</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/arroz.jpg" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Arroz Japonês Guin - 1kg">
              <input type="hidden" name="preco" value="30,00">
              <input type="hidden" name="imagem" value="arroz.jpg">

              <p>
                <strong>Descrição:</strong>
                Arroz japonês de grãos curtos, com textura macia e levemente pegajosa após o preparo. Ideal para pratos tradicionais como sushi e donburi, garantindo sabor, qualidade e autenticidade na culinária japonesa.


              </p>

              <p><strong>Preço:</strong> R$ 30,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!--  modal4-->
  <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Salgadinho Coreano Cuttlefish Sabor Lula Nongshim 55g</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/salgadino coreano.png" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Salgadinho Coreano Cuttlefish Sabor Lula Nongshim 55g">
              <input type="hidden" name="preco" value="13.00">
              <input type="hidden" name="imagem" value="salgadino coreano.png">

              <p>
                <strong>Descrição:</strong>
                Salgadinho coreano crocante com sabor intenso de lula, levemente adocicado e marcante. Ideal para quem gosta de snacks diferentes e autênticos, trazendo o sabor da culinária asiática para o dia a dia.

              </p>

              <p><strong>Preço:</strong> R$ 13,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal5 -->
  <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Lamen Coreano Jin Ramen Mild Ottogi 120g 
</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/lamencoreano.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Lamen Coreano Jin Ramen Mild Ottogi 120g 
">
              <input type="hidden" name="preco" value="7.00">
              <input type="hidden" name="imagem" value="lamencoreano.webp">

              <p>
                <strong>Descrição:</strong>
                Macarrão instantâneo coreano clássico com sabor suave e levemente temperado, perfeito para quem gosta de um ramen reconfortante sem muita picância. Com caldo equilibrado e vegetais desidratados, é prático de preparar e combina bem com ovos, kimchi ou legumes para uma refeição rápida e saborosa.

              </p>

              <p><strong>Preço:</strong> R$ 7,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal6 -->
  <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Suco de Uva com Coco 238ml Haitai Coréia do Sul</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/refri.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Suco de Uva com Coco 238ml Haitai Coréia do Sul">
              <input type="hidden" name="preco" value="7.00">
              <input type="hidden" name="imagem" value="refri.webp">

              <p>
                <strong>Descrição:</strong>
                 Bebida refrescante que combina o sabor doce e frutado da uva com um toque suave de coco. Uma opção diferente e saborosa para quem busca bebidas asiáticas autênticas e tropicais, ideal para acompanhar lanches ou momentos de descanso.

              </p>

              <p><strong>Preço:</strong> R$ 7,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal7 -->
  <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">SAMYANG BULDAK CARBONARA HOT CHICKEN 130GR</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/carbonara.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="SAMYANG BULDAK CARBONARA HOT CHICKEN 130GR">
              <input type="hidden" name="preco" value="7.50">
              <input type="hidden" name="imagem" value="carbonara.webp">

              <p>
                <strong>Descrição:</strong>
                Lámen instantâneo coreano super picante com molho cremoso de carbonara e sabor marcante de frango. Combina calor e sabor intenso com um toque rico e cremoso, perfeito para quem curte desafios picantes e uma refeição rápida e saborosa.

              </p>

              <p><strong>Preço:</strong> R$ 7,50</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- COMEÇO DO CARD 2 -->

<section class="card2" id="secao-cosmeticos">
   <div class="infos-card">
  <h3 class="titlecards">Cosmeticos</h3>
  <!-- <div class="search-wrapper">
    <input type="text" placeholder="Pesquise pelo seu produto" class="input1" id="inputPesquisa">
    <button class="btn-search" onclick="pesquisarProduto()">🔍</button>
  </div> -->
  <!-- Note o 'this' e o 'data-target-section' apontando para 'secao-cosmeticos' -->
<select name="filtro" onchange="aplicarOrdenacaoPreco(this)" data-target-section="secao-cosmeticos">
  <option value="relevante">Relevante</option>
  <option value="maior_preco">Maior preço</option>
  <option value="menor_preco">Menor preço</option>
</select>
</div>

  </div>

  <!-- Comeco dos modais do segund card -->
<!-- modal8 -->
  <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cera Quente</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/cera quente.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Cera Quente">
              <input type="hidden" name="preco" value="45.00">
              <input type="hidden" name="imagem" value="cera quente.webp">

              <p>
                <strong>Descrição:</strong>
                Cera depilatória quente formulada com base de açúcar e fragrância delicada de jasmim. Proporciona depilação eficiente e suave, deixando a pele perfumada e com toque sedoso. Ideal para quem busca cuidado corporal com aroma agradável e resultado duradouro.

              </p>

              <p><strong>Preço:</strong> R$ 45,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal9 -->
  <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Protetor Solar Facial Bioré FPS 50+ UV Aqua Rich 70ml Creme
</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/protetorsolarbiore.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Protetor Solar Facial Bioré FPS 50+ UV Aqua Rich 70ml Creme
">
              <input type="hidden" name="preco" value="70.00">
              <input type="hidden" name="imagem" value="protetorsolarbiore.webp">

              <p>
                <strong>Descrição:</strong>
                Protetor solar facial leve e de rápida absorção com alta proteção FPS 50+, que ajuda a proteger a pele contra os danos causados pelos raios UV. Sua textura em gel-creme deixa a pele hidratada, sem sensação pegajosa, ideal para uso diário e antes da maquiagem.


              </p>

              <p><strong>Preço:</strong> R$ 70,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal10 -->
  <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Espuma Facial</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/espumafacial.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Espuma Facial">
              <input type="hidden" name="preco" value="75.00">
              <input type="hidden" name="imagem" value="espumafacial.webp">

              <p>
                <strong>Descrição:</strong>
                Espuma de limpeza facial suave e eficaz que remove impurezas, oleosidade e resíduos do dia a dia, deixando a pele limpa, fresca e renovada. Ideal para uso diário, promovendo sensação de conforto e toque macio.

              </p>

              <p><strong>Preço:</strong> R$ 75,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal11 -->
 <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Tratamento facial</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/tratamentofacial.jpg" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Tratamento facial">
              <input type="hidden" name="preco" value="250.00">
              <input type="hidden" name="imagem" value="tratamentofacial.jpg">

              <p>
                <strong>Descrição:</strong>
                Tratamento de skincare premium com fórmula poderosa que ajuda a uniformizar o tom da pele, reduzir sinais de envelhecimento e melhorar a textura com mais luminosidade e suavidade. Ideal para quem busca resultados visíveis, pele mais radiante e cuidado avançado.

              </p>

              <p><strong>Preço:</strong> R$ 250,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal12 -->
 <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Kit Cosrx facial</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/kitcosrx.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Kit Cosrx facial">
              <input type="hidden" name="preco" value="323.00">
              <input type="hidden" name="imagem" value="kitcosrx.webp">

              <p>
                <strong>Descrição:</strong>
                Conjunto de cuidados com a pele da renomada marca coreana COSRX, com produtos formulados para limpar, hidratar e tratar diferentes necessidades da pele de forma suave e eficaz. Ideal para quem quer uma rotina completa de skincare com foco em equilíbrio, conforto e resultados visíveis.

              </p>

              <p><strong>Preço:</strong> R$ 323,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal13 -->
 <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Kit Capilar</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/kit cqpilar.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Kit Capilar">
              <input type="hidden" name="preco" value="542.00">
              <input type="hidden" name="imagem" value="kit cqpilar.webp">

              <p>
                <strong>Descrição:</strong>
                Kit de cuidados para os cabelos com ingredientes nutritivos inspirados no mel, que ajudam a hidratar, fortalecer e dar brilho aos fios. Ideal para quem busca tratamento diário com toque suave, maciez e aparência saudável.


              </p>

              <p><strong>Preço:</strong> R$ 542,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>

<!-- modal14 -->
  <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Shampoo perfect sérum</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/shampoo.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Shampoo perfect sérum">
              <input type="hidden" name="preco" value="75.00">
              <input type="hidden" name="imagem" value="shampoo.webp">

              <p>
                <strong>Descrição:</strong>
               Shampoo nutritivo que limpa e hidrata os fios enquanto ajuda a reparar danos, deixando o cabelo macio, sedoso e com brilho. Ideal para quem busca cuidado diário com toque leve e resultado saudável.


              </p>

              <p><strong>Preço:</strong> R$ 75,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>


<!-- modal15 -->
 <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form action="adicionar_carrinho.php" method="POST">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Hidratações Kerasys – Repair Ampoule & Moisture Ampoule
</h1>

          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <div class="grupo-pai">

            <div class="img-modal">
              <img src="./img/hidratacao capilar.webp" alt="" height="300px">
            </div>

            <div class="info-modal">

              <input type="hidden" name="nome" value="Hidratações Kerasys – Repair Ampoule & Moisture Ampoule
">
              <input type="hidden" name="preco" value="85.00">
              <input type="hidden" name="imagem" value="hidratacao capilar.webp">

              <p>
                <strong>Descrição:</strong>
                Tratamentos intensivos para os cabelos: a Repair Ampoule ajuda a reconstruir fios danificados e quebradiços, enquanto a Moisture Ampoule proporciona hidratação profunda e maciez. Juntas, fortalecem, nutrem e deixam o cabelo mais saudável, brilhante e sedoso.


              </p>

              <p><strong>Preço:</strong> R$ 85,00</p>

              <p><strong>Disponibilidade:</strong> Em estoque</p>

              <div class="selecionar">

                <p><strong>Selecione o tamanho:</strong></p>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Pequeno"
                         required>

                  Pequeno
                </label>

                <label>
                  <input type="radio"
                         name="tamanho"
                         value="Grande">

                  Grande
                </label>

              </div>

              <div class="quantidade">

                <p><strong>Selecione a quantidade:</strong></p>

                <select name="quantidade">

                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>

                </select>

              </div>

              <p><strong>Avaliações:</strong> ★★★★☆ (150 avaliações)</p>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button"
                  class="btn-modal"
                  data-bs-dismiss="modal">

            <img src="img/arrow_back_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

          <button type="submit" class="btn-modal">

            <img src="img/shopping_cart_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.png" alt="">

          </button>

        </div>

      </form>

    </div>
  </div>
</div>



<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide product-card" data-original-order="1">
      <div class="card" data-nome="Cera Quente" data-preco="45.00">
        <img src="./img/cera quente.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>Cera Quente</strong></h5>
          <p class="card-text">Cera quente Oriental a base de Açucar com perfume de jasmin.</p>
               <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal8">Ver produto
</button></div>
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="2">
      <div class="card" data-nome="Protetor Solar Facial Bioré FPS 50+ UV Aqua Rich 70ml Creme" data-preco="70.00">
        <img src="./img/protetorsolarbiore.webp" class="card-img-top" alt="..." height="250px">
        <div class="card-body">
          <h5 class="card-title"><strong>Protetor Solar Facial Bioré FPS 50+ UV Aqua Rich 70ml Creme
</strong></h5>
          <p class="card-text">Aqua Rich | Bioré.</p>
                 <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal9">Ver produto
</button></div>
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="3">
       <div class="card" data-nome="Espuma facial" data-preco="75.00">
   <img src="./img/espumafacial.webp" class="card-img-top" alt="..." height="273px">
   <div class="card-body">
     <h5 class="card-title"><strong>Espuma facial</strong></h5>
     <p class="card-text">Enka.</p>
         <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal10">Ver produto
</button></div>
   </div>
 </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="4">
       <div class="card" data-nome="Tratamento facial"  data-preco="250.00">
   <img src="./img/tratamentofacial.jpg" class="card-img-top" alt="..." height="270px">
   <div class="card-body">
     <h5 class="card-title"><strong>Tratamento facial</strong></h5>
     <p class="card-text">SK-II.</p>
        <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal11">Ver produto
</button></div>
   </div>
 </div>
    </div>


     <div class="swiper-slide product-card" data-original-order="5">
             <div class="card" data-nome="Kit Cosrx facial" data-preco="323.00">
   <img src="./img/kitcosrx.webp" class="card-img-top" alt="..." height="270px">
   <div class="card-body">
     <h5 class="card-title"><strong>Kit Cosrx facial</strong></h5>
     <p class="card-text">Cosrx.</p>
             <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal12">Ver produto
</button></div>
   </div>
 </div>
    </div>


     <div class="swiper-slide product-card" data-original-order="6">
      <div class="card" data-nome="Kit capilar" data-preco="342.00">
        <img src="./img/kit cqpilar.webp" class="card-img-top" alt="..." height="274px">
        <div class="card-body">
          <h5 class="card-title"><strong>Kit capilar</strong></h5>
          <p class="card-text"> &Honey.</p>
                <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal13">Ver produto
</button></div>
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="7">
      <div class="card" data-nome="Shampoo perfect serum" data-preco="75.00">
        <img src="./img/shampoo.webp" class="card-img-top" alt="..." height="280px">
        <div class="card-body">
          <h5 class="card-title"><strong>Shampoo perfect serum</strong></h5>
          <p class="card-text">Mise en Scène.</p>
                   <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal14">Ver produto
</button></div>
        </div>
      </div>
    </div>

    <div class="swiper-slide product-card" data-original-order="8">
      <div class="card" data-nome="Hidratações Kerasys – Repair Ampoule & Moisture Ampoule" data-preco="85.00">
        <img src="./img/hidratacao capilar.webp" class="card-img-top" alt="..." height="280px">
        <div class="card-body">
          <h5 class="card-title"><strong>Hidratações Kerasys – Repair Ampoule & Moisture Ampoule</strong></h5>
          <p class="card-text">Kerasys.</p>
                <div class="divbuttonmodal"><button type="button" class="btn-card" data-bs-toggle="modal" data-bs-target="#exampleModal15">Ver produto
</button></div>
        </div>
      </div>
    </div>


  </div>

  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
</section>


</section>

<section class="facilidades">
      <div class="titlefaci">
      <h2>Conheça nossos serviços adicionais.</h2>
    </div>
  <div class="facilidades-pai">

    <div class="facilidadepix">
        <img src="img/comprapix.png" alt="" class="imgfacilidade" height="100px">
        <p class="descrifacilidadee">Ganhe 5% off com compras pelo pix.</p>
    </div>
    <div class="facilidadefrete">
        <img src="img/frete.png" alt="" class="imgfacilidade"height="100px">
        <p class="descrifacilidadee">Frete grátis para todo o Brasil.</p>
    </div>
    <div class="transportadora">
        <img src="img/transportemaisrapido.png" alt="" class="imgfacilidade">
        <p class="descrifacilidadee">Entrega rápida e segura.</p>
    </div>
    <div class="cartao">
      <img src="img/cartaodecredito.png" alt="" class="imgfacilidade"height="100px">
        <p class="descrifacilidadee">Parcele em até 12x sem juros.</p>
    </div>
  </div>

</section>




<footer>
  <div class="infofooter">
    <p>© OrientalDream2025 | LarissaOg. <br>Todos os direitos reservados</p>
    <div class="redesfooter">
      <img src="./img/email (1).png" alt="" class="imgfooter">
      <img src="./img/facebook (2).png" alt=""class="imgfooter">
      <img src="./img/instagram (4).png" alt=""class="imgfooter">
      <img src="./img//chamada-telefonica.png" alt=""class="imgfooter">
  </div>

  <div class="inputfooter">
    <div class="emailfooter">
      <p>Deixe seu E-mail para receber cupons e<br>descontos de 15% off + cashback na sua primeira compra. </p>
    </div>
    <div class="inputemailfooter">
      <input type="text" placeholder="Digite seu e-mail" class="inputemail">
      <button class="buttonemail">Enviar</button>
  </div>
 
 
 
</footer>

    
    <script>
      
class MobileNavbar {
  constructor(MobileMenu, navList, navLinks) {
    this.MobileMenu = document.querySelector(MobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks); 
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.MobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.MobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.MobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list *"
);

mobileNavbar.init(); 

window.addEventListener("scroll", function () {
    const nav = document.querySelector("nav");
    const btn = document.getElementById("retornarTopoBtn");
    const y = window.scrollY;

    // ====== sticky navbar ======
    if (y > 0) {
        nav.classList.add("sticky");
        document.body.classList.add("menu-sticky");
    } else {
        nav.classList.remove("sticky");
        document.body.classList.remove("menu-sticky");
    }

    // ====== botão aparecer após 50px ======
    if (y > 50) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
});


  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 5,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      480: { slidesPerView: 2 },
      768: { slidesPerView: 3 },
      1024: { slidesPerView: 4 }
    }
  });
    function pesquisarProduto() {
    const valor = document.getElementById('inputPesquisa').value.toLowerCase();
    // Aqui você faria a lógica pra filtrar os cards
    console.log("Procurando por:", valor);
    // Exemplo: filtrar cards que contêm o valor pesquisado
}


// barra pesquisa

function pesquisarProduto() {
    const input = document.getElementById('pesquisa');
    const filtro = input.value.toLowerCase();
    
    // Seleciona todas as seções que contêm os carrosséis de produtos
    // (ex: <section class="card1">, <section class="card2">, etc.)
    const productSections = document.querySelectorAll('section[class^="card"]');

    let totalVisibleProducts = 0;

    productSections.forEach(function(section) {
        let hasVisibleProductsInSection = false;
        // Pega todos os slides de produtos DENTRO desta seção específica
        const slides = section.querySelectorAll('.swiper-slide.product-card');
        
        slides.forEach(function(slide) {
            const card = slide.querySelector('.card');
            if (card) {
                const nomeProduto = card.getAttribute('data-nome').toLowerCase();
                
                if (nomeProduto.includes(filtro)) {
                    slide.style.display = ''; // Mostra o slide
                    hasVisibleProductsInSection = true;
                    totalVisibleProducts++;
                } else {
                    slide.style.display = 'none'; // Esconde o slide
                }
            }
        });

        // Após verificar todos os slides da seção, decide se a seção deve ser mostrada ou escondida
        if (hasVisibleProductsInSection) {
            section.style.display = ''; // Mostra a seção
        } else {
            section.style.display = 'none'; // Esconde a seção
        }

        // Atualiza a instância do Swiper para esta seção, se existir
        const swiperContainer = section.querySelector('.swiper.mySwiper');
        if (swiperContainer && swiperContainer.swiper) {
            swiperContainer.swiper.update();
        }
    });

    // Lógica para exibir uma mensagem se nenhum produto for encontrado em TODAS as seções
    let noResultsMessage = document.getElementById('no-results-message');
    const containerForMessage = document.querySelector('.container.mt-5'); // Ou outro elemento pai adequado

    if (totalVisibleProducts === 0 && filtro !== '') {
        if (!noResultsMessage) {
            noResultsMessage = document.createElement('div');
            noResultsMessage.id = 'no-results-message';
            noResultsMessage.style.textAlign = 'center';
            noResultsMessage.style.marginTop = '20px';
            if (containerForMessage) {
                containerForMessage.after(noResultsMessage); // Adiciona após o container de boas-vindas
            }
        }
        noResultsMessage.innerHTML = `<p>Nenhum produto encontrado para "<strong>${filtro}</strong>".</p>`;
        noResultsMessage.style.display = '';
    } else {
        if (noResultsMessage) {
            noResultsMessage.style.display = 'none';
        }
    }
}

// filtro


function aplicarOrdenacaoPreco(selectElement) {
    const filtroSelecionado = selectElement.value;
    const targetSectionId = selectElement.dataset.targetSection;
    const section = document.getElementById(targetSectionId);

    if (!section) {
        console.error("Seção alvo não encontrada para o filtro: ", targetSectionId);
        return;
    }

    const swiperWrapper = section.querySelector(".swiper-wrapper");
    if (!swiperWrapper) {
        console.error("Swiper wrapper não encontrado na seção: ", targetSectionId);
        return;
    }

    let cards = Array.from(swiperWrapper.querySelectorAll(".swiper-slide.product-card"));

    // Reseta a visibilidade de todos os cards e garante que a seção esteja visível
    cards.forEach(card => card.style.display = "");
    section.style.display = ""; 

    if (filtroSelecionado === "maior_preco") {
        cards.sort((a, b) => {
            const precoA = parseFloat(a.querySelector(".card").dataset.preco);
            const precoB = parseFloat(b.querySelector(".card").dataset.preco);
            return precoB - precoA; // Ordena do maior para o menor preço
        });
    } else if (filtroSelecionado === "menor_preco") {
        cards.sort((a, b) => {
            const precoA = parseFloat(a.querySelector(".card").dataset.preco);
            const precoB = parseFloat(b.querySelector(".card").dataset.preco);
            return precoA - precoB; // Ordena do menor para o maior preço
        });
    } else if (filtroSelecionado === "relevante") {
        // Ordena pela ordem original
        cards.sort((a, b) => {
            const ordemA = parseInt(a.dataset.originalOrder);
            const ordemB = parseInt(b.dataset.originalOrder);
            return ordemA - ordemB; // Ordena pela ordem original (crescente)
        });
    }

    // Remove os cards existentes e reinsere os cards na nova ordem
    while (swiperWrapper.firstChild) {
        swiperWrapper.removeChild(swiperWrapper.firstChild);
    }
    cards.forEach(card => swiperWrapper.appendChild(card));

    // Atualiza o Swiper para refletir as mudanças na ordem
    const swiperInstance = section.querySelector(".swiper.mySwiper");
    if (swiperInstance && swiperInstance.swiper) {
        swiperInstance.swiper.update();
    }

    // Após aplicar a ordenação, re-aplica a pesquisa se houver algum termo na barra de pesquisa
    const termoPesquisaAtual = document.getElementById("pesquisa").value;
    if (termoPesquisaAtual) {
        pesquisarProduto(); 
    }
}

// Certifique-se de que a função pesquisarProduto() esteja atualizada para esconder/mostrar seções vazias
// e que ela chame swiper.update() para cada swiper afetado.

// Chame a função uma vez ao carregar a página para garantir que o Swiper esteja atualizado
// e para aplicar qualquer ordenação inicial se houver (ex: "Relevante" por padrão)
document.addEventListener("DOMContentLoaded", () => {
    // Seu código de inicialização do Swiper já deve estar aqui
    // var swiper = new Swiper(".mySwiper", { ... });

    // Chama a função de ordenação para aplicar o estado inicial (ex: "Relevante") para CADA SELECT
    document.querySelectorAll("select[data-target-section]").forEach(select => {
        aplicarOrdenacaoPreco(select);
    });
});

 
    </script>
</body>
</html>