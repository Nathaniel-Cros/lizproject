<?php include './components/header.php'; ?>
<header>
    <?php include './components/menu.php' ?>
</header>
<main>
    <section class="our-projects">
        <div class="container-project">
          <div class="project-title">
            <h2>COCTELES</h2>
            <hr>
          </div>
        </div>
     </section>
   <!-- Testimonios ------------------------------------------>
   <section class="testimonios">
     <div class="box-testimonio">

        <div class="card-testimonio">
          <div class="card-img">
            <img src="https://i.blogs.es/1bc4e0/shirley/1366_2000.jpg">
          </div>
          <div class="testimonio-text">
            <h4>Cóctel Shirley Temple <br>$30</h4>
          </div>
        </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
          <div class="card-img">
            <img src="https://i.blogs.es/95dbff/san_francisco/1366_2000.jpg">
          </div>
          <div class="testimonio-text">
            <h4>Cóctel San Francisco<br>$40</h4>
          </div>
        </div>
<!------------------------------------------------------------>

      <div class="card-testimonio">
          <div class="card-img">
            <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/imj/elgrancatador/C/C%C3%B3mo%20hacer%20un%20coctel%20margarita.jpg">
          </div>
          <div class="testimonio-text">
            <h4>Margarita<br>$50</h4>
          </div>
      </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/imj/vivirsalud/4/4-cocteles-saludables-a-base-de-te-5.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Gin and Tonic<br>$40</h4>
            </div>
        </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/istock_63043367_medium.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Whisk-cola<br>$50</h4>
            </div>
          </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/istock_103326673_medium.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Bellini<br>$40</h4>
            </div>
        </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/istock_15535646_medium.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Martini seco<br>$40</h4>
            </div>
        </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/imj/T/Tragos%20para%20preparar%20en%20casa.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Cuba libre<br>$40</h4>
            </div>
        </div>
<!------------------------------------------------------------>
        <div class="card-testimonio">
            <div class="card-img">
              <img src="https://img.vixdata.io/pd/webp-large/es/sites/default/files/istock_48490362_medium.jpg">
            </div>
            <div class="testimonio-text">
              <h4>Daiquiri<br>$40</h4>
            </div>
        </div>
     </div>
   </section>
 </main>
<div id="shirley" class="modal">
    <div id="mostrar_formulario" class="form-register">
        <span id="closes" class="close">&times;</span>
        <form action="../../form-result.php" target="_blank">
            <h4>¿Desea su bebida con alcohol?</br></br>
                <input type="radio" name="ingresos" value="si">SI
                <input type="radio" name="ingresos" value="no">NO<br>
            </h4>
            <input class="botons" type="submit" value="ORDENAR">
        </form>
    </div>
</div>
<?php include './components/footer.php'; ?>
