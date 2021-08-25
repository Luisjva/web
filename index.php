<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/general/normalize.css">
    <link rel="stylesheet" href="./style/general/nav.css">
    <link rel="stylesheet" href="./style/general/header.css">
    <link rel="stylesheet" href="./style/general/cartas.css">
    <link rel="stylesheet" href="./style/general/general.css">
    <link rel="stylesheet" href="./style/index.css">
    <title>Inicio</title>
  </head>
  <body>
    <nav>
      <p>< / ></p>
      <ul>
        <a href="/">
          <li>Inicio</li>
        </a>
        <a href="#">
          <li>Categorias</li>
        </a>
        <a href="#">
          <li>Contacto</li>
        </a>
      </ul>
    </nav>

    <header>
      <h1>< / ></h1>
    </header>

    <main>
      <section class="carta__contenedor"> 

        <div class="carta carta-1 carta--posicion-1" 
          style='background-image: linear-gradient(transparent 20%, #000), url("./public/post5.jpg")'
        >
          <h3>Titulo</h3>
          <time datetime="2011-11-18">18-11-2011</time>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi possimus culpa quae assumenda
          </p>
        </div>

        <div class="contenedor__carta-2 carta--posicion-2">
          <div class="carta carta-2">
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur 
            </p>
          </div>
          <div 
            class="carta carta-2"
            style='background-image: linear-gradient(#0007, #0007), url("./public/post5.jpg"); color: #fff;'
          >
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur 
            </p>
          </div>
          <div class="carta carta-2">
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur 
            </p>
          </div>
          <div class="carta carta-2">
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur 
            </p>
          </div>
        </div>

        <div class="contenedor__carta-3 carta--posicion-3">
          <div 
            class="carta carta-3"
          >
            <img src="./public/post3.jpg">
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing 
            </p>
          </div>
          <div 
            class="carta carta-3"
          >
            <img src="./public/post2.jpg"/>
            <h3>Titulo</h3>
            <time datetime="2011-11-18">18-11-2011</time>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing 
            </p>
          </div>
        </div>

        <div class="carta carta-1 carta--posicion-4"
          style='background-image: linear-gradient(transparent 20%, #000), url("./public/post6.jpg")'
        >
          <h3>Titulo</h3>
          <time datetime="2011-11-18">18-11-2011</time>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi possimus culpa quae assumenda
          </p>
        </div>

      </section>

      <div class="categorias">
        <h2>Categorias</h2>
        <div 
          class="carta"
          style='background-image: linear-gradient(#0007, #0007), url("./public/post5.jpg");color: #fff;'
        >Tecnologias</div>
        <div 
          class="carta"
          style='background-image: linear-gradient(#0007, #0007), url("./public/post5.jpg");color: #fff;'
        >Proyectos</div>
        <div 
          class="carta"
          style='background-image: linear-gradient(#0007, #0007), url("./public/post5.jpg");color: #fff;'
        >Front end</div>
        <div 
          class="carta"
          style='background-image: linear-gradient(#0007, #0007), url("./public/post5.jpg");color: #fff;'
        >Back end</div>
      </div>
    </main>


  </body>
</html>
