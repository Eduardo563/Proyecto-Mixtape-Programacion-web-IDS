<?php
include '../src/views/layouts/header.php'; 
?>


<div
  class="hero min-h-screen bg-center bg-cover overflow-hidden "
  style="background-image: url(<?=ASSETS_PATH?>/images/Collage_fondo.png);"
>
  <div class="hero-overlay"></div>
  <div class="hero-content text-neutral-content text-center">
    <div class="max-w-xl">
      <h1 class="mb-5 text-5xl font-bold">Descubre a tu nuevo artista favorito.<br>
            Presentaciones en vivo cerca de ti.<br>
            Comparte tus canciones.</h1>
      <p class="mb-5">
        
      </p>
      <a href="<?=SRC_PATH?>/views/blog.php"><button class="btn btn-primary">Dar un vistazo</button></a>
    </div>
  </div>
</div>
<section class="min-h-screen grid grid-cols-1 lg:grid-cols-6 items-center bg-[#0F1316] p-4">
         
</section>

<?php include '../src/views/layouts/side-bar.php'; ?>
<?php include '../src/views/layouts/footer.php'; ?>