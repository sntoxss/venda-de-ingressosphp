<html lang="pt-BR">
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Eventify</title>
  <link rel="icon" href="caminho/para/sua/imagem.ico" type="image/x-icon">
</head>
<style>
  /* reset e fonte */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

  :root {
    --color-primary: linear-gradient(to right, #D5EBEBB8, #B9ECFE)
  }

  * {
    font-family: "Poppins";
    margin: 0;
    padding: 0;
  }

  body {
    text-decoration: none;
  }

  /* cabeçalho */
  header {
    width: 100%;
    background: white;
    display: flex;
    box-shadow: 0 4px 20px 0 #00000040;
    position: fixed;
    top: 0;
    justify-content: center;
  }

  .header {
    padding: 15px 100px;
    display: flex;
    justify-content: center;
  }

  /* corpo */
  .container-banner {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding: 80px 0 80px 0;
    background: var(--color-primary);
    align-items: center;
  }

  .img-banner {
    width: 482px;
    height: 449px;
  }

  .box-text-banner {
    display: flex;
    flex-direction: column;
    width: 459px;
    gap: 15px;
  }

  .box-text-banner h1 {
    font-weight: 700;
    font-size: 40px;
    line-height: 60px;
  }

  .box-text-banner p {
    font-size: 19px;
    line-height: 28.5px;
  }

  .box-text-banner button {
    cursor: pointer;
    margin-top: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    border-radius: 19px;
    height: 58px;
    width: 204px;
    color: white;
    font-size: 19px;
    font-weight: 700;
  }

  .box-text-banner button:hover {
    border: 1px solid black;
    transition: ease 1s;
    background-color: transparent;
    color: black;
    box-shadow: 0 0 10px 0 black;
  }

  .box-img-banner {
    display: flex;
  }

  .container-blocks-informations {
    display: flex;
    padding: 100px 0;
    justify-content: space-around;
  }

  .box-information {
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .box-information p {
    font-size: 15px;
    line-height: 22.5px;
    width: 232px;
  }

  .box-information h3 {
    font-weight: 700;
    font-size: 23px;
    margin-bottom: 15px;
  }

  .box-information button {
    cursor: pointer;
    margin-top: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    border-radius: 19px;
    height: 58px;
    width: 204px;
    color: white;
    font-size: 19px;
    font-weight: 700;
  }

  .box-information button:hover {
    border: 1px solid black;
    transition: ease 1s;
    background-color: transparent;
    color: black;
    box-shadow: 0 0 2px 0 black;
  }

  .box-information img {
    height: 69px;
    margin-bottom: 5px;
  }

  .container-next-event {
    gap: 60px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    background: var(--color-primary);
    padding: 100px 70px;
  }

  .container-next-event h2 {
    font-weight: 700;
    font-size: 40px;
  }

  .box-next-event {
    display: flex;
    flex-direction: row;
  }

  .box-imgs-next-events {
    width: 273px;
    height: 261px;
    border: 1px solid black;
    background-color: black;
    margin-right: 40px;
    box-shadow: 0 0 15px 0 black;
  }

  .box-text-next-events div h3 {
    font-size: 23px;
    font-weight: 700;
    line-height: 36.57px;
  }

  .box-text-next-events div p {
    font-size: 17px;
    font-weight: 400;
    line-height: 27.03px;
    flex-wrap: nowrap;
  }

  .box-text-next-events {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .img1 {
    width: 100%;
  }

  .img2 {
    width: 49.2%;
  }

  .container-information-principais {
    display: flex;
    flex-direction: column;
    padding: 100px;
    gap: 150px;
  }

  .block-information-principais {
    display: flex;
    flex-direction: row;
    gap: 60px;
  }

  .block-img-information-principais {
    width: 557px;
    height: 506px;
  }

  .block-img-information-principais img {

    border-radius: 10px;
  }

  .block-text-information-principais {
    width: 547px;
    display: flex;
    flex-direction: column;
    gap: 40px;
  }

  .block-text-information-principais h3 {
    font-weight: 600;
    font-size: 50px;

  }

  .block-text-information-principais p {
    font-size: 28px;
    line-height: 44.52px;
  }

  .container-footer {
    background: linear-gradient(180deg, #B9ECFE, #000000);
    padding: 150px 250px 250px;
    display: flex;
    flex-direction: column;
    color: white;
    gap: 150px;
  }

  .boxs-footer {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    gap: 170px;
  }

  .boxs-footer h3 {
    font-weight: 600;
    font-size: 30px;
    line-height: 47.7px;
    color: #000000;
  }

  .boxs-footer p {
    font-size: 26px;
    font-weight: 300;
  }

  .box-politicas {
    display: flex;
    flex-direction: column;
    gap: 15px
  }
</style>

<body>
  <header>
    <div class="header">
      <p>Melhor site de vendas de Ingressos para eventos do Brasil</p>
    </div>
  </header>

  <main>
    <section class="container-banner">
      <div class="box-text-banner">
        <h1>
          A Oportunidade que Você Esperava é AGORA
        </h1>
        <p>
          Ingressos para eventos imperdíveis à sua espera! Não deixe passar a oportunidade.
          Adquira o seu e faça parte da história!
        </p>
        <button>
          Adquira agora!
        </button>
      </div>
      <div class="box-img-banner">
        <img src="./Group 1.png" alt="Foto de famosos que fazem show" class="img-banner">
      </div>
    </section>
    <section class="container-blocks-informations">

      <div class="box-information">
        <img src="./security.svg" alt="escudo Segurança">
        <h3>Segurança</h3>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <button>Mais informações</button>
      </div>

      <div class="box-information">
        <img src="./People.svg" alt="Pessoas Equipe">
        <h3>Equipe</h3>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <button>Mais informações</button>
      </div>

      <div class="box-information">
        <img src="./carrinho.svg" alt="Carrinho Vendas">
        <h3>Vendas</h3>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        <button>Mais informações</button>
      </div>

    </section>
    <section class="container-next-event">
      <h2>
        Show que te esperam ainda esse ano
      </h2>
      <div class="box-next-event">
        <div class="box-imgs-next-events">

          <img src="./brunomars.png" alt="Bruno Mars show" class="img1">
          <img src="./chrisbrown.png" alt="Chris Brownl" class="img2">
          <img src="./shakira.png" alt="Shakira" class="img2">
        </div>
        <div class="box-text-next-events">
          <div>
            <h3>Bruno Mars</h3>
            <p>Data: 6, 7, 8, 9, 10, 11 de Outubro</p>
          </div>
          <div>
            <h3>Shakira</h3>
            <p>Data: 4, 5, 6 de Novembro</p>
          </div>
          <div>
            <h3>Chris Brown</h3>
            <p>Data: 21, 22, 23 de Dezembro</p>
          </div>
        </div>
      </div>
    </section>
    <section class="container-information-principais">
      <div class="block-information-principais">
        <div class="block-img-information-principais">
          <img src="./img1.png" alt="show">
        </div>
        <div class="block-text-information-principais">
          <h3>Quem somos?</h3>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries
          </p>
        </div>
      </div>
      <div class="block-information-principais">

        <div class="block-text-information-principais">
          <h3>Como trabalhamos?</h3>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries
          </p>
        </div>
        <div class="block-img-information-principais">
          <img src="./img2.png" alt="show">
        </div>
      </div>
      <div class="block-information-principais">
        <div class="block-img-information-principais">
          <img src="./img3.png" alt="show">
        </div>
        <div class="block-text-information-principais">
          <h3>Nossa equipe</h3>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries
          </p>
        </div>
      </div>
      <div class="block-information-principais">

        <div class="block-text-information-principais">
          <h3>O numero 1 em venda ingressos</h3>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries
          </p>
        </div>
        <div class="block-img-information-principais">
          <img src="./img4.png" alt="show">
        </div>
      </div>


    </section>
  </main>
  <footer class="container-footer">
    <div class="boxs-footer">
      <div class="box-politicas">
        <h3>Termos e políticas</h3>
        <p>Termos de uso</p>
        <p>Política de compra</p>
        <p>Política de Cookies</p>
        <p>Política de Privacidade</p>
      </div>
      <div>
        <h3>Sobre nós</h3>
        <p>Quem somos?</p>
        <p>Como trabalhamos</p>
        <p>Nossa equipe</p>
        <p>Numero 1 em vendas de ingressos</p>
      </div>
    </div>
    <div><img src="./Eventify.png" alt="Logo marca"></div>

  </footer>
</body>

</html>