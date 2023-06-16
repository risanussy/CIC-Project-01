<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

   <title>B-community</title>

   <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/home/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <!-- Navbar start -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/'); ?>img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            B-community
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Bantuan</a>
               </li>       
            </ul>
            <form class="form-inline my-2 my-lg-0">
               <a href="<?= base_url('auth/registration'); ?>" class="btn btn-outline-success mr-3 my-2 my-sm-0" type="submit">Register</a>
               <a href="<?= base_url('auth/'); ?>" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</a>
            </form>
         </div>
      </div>
   </nav>
   <!-- Navbar and -->

   <!-- Jumbotron start -->
   <div class="jumbotron jumbotron-fluid j-fix d-flex justify-content-center align-items-center">
      <div class="container text-center">
         <h1 class="display-2">B-Community</h1>
         <p class="lead">Platform bisnis community solusi bisnis untuk keluarga Anda</p>
      </div>
   </div>
   <!-- Jumbotron and -->

   <div class="container pt-2">
      <!-- Visi Misi -->
      <h2 class="text-center">Visi Dan Misi</h2>
      <br>
      <div class="row">
                    <div class="col text-justify">
                         <p> 
                              Menjadi perusahaan pemasaran dan membangun ekonomi gotong royong dalam sistem keagenan di indonesia,berkontribusi meningkatkan ekonomi di era yang sulit ini dengan menciptakan wadah dan peluang baru melalui platfrom kami. menghasilkan pengusaha yang dapat dibanggakan, baik sebagai pemasar maupun produsen.
                         </p>
                    </div>
                    <div class="col text-justify">
                         <p>
                              Berdedikasi untuk membuat perubahan positif dengan menjadi perusahaan yang dapat diandalkan serta menciptakan inovasi dan peluang baru agar kami menjadi pilihan bisnis nomor 1 di setiap keluarga di indonesia.
                         </p>
                    </div>     
               </div>
               <!-- Visi Misi akhir -->
               <br><br>
               </div>
               <!--  Marketplace & Reward -->
               <div class="bg-success">
                    <div class="container">
                    <br> 
                    <br> 
                    <div class="row text-center">
                         <div class="col">
                              <h2>Marketplace & Reward</h2>
                         </div>
                    </div>
                    <br> 
                    <div class="row">
                         <div class="col-4">
                              <div class="card">
                                   <img src="<?= base_url('assets/'); ?>img/market.jpg" class="card-img-top" alt="Marketplace" width="100px" height="200px">
                              <div class="card-body">
                                   <h3>Marketplace B-Community</h3>
                                   <p class="card-text">Platform keagenan masa kini, sesuai style kerja jaman 4.0 yang memanfaatkan digital marketing.</p>
                              </div>
                         </div>
                         </div>
                         <div class="col-4">
                              <div class="card">
                                   <img src="<?= base_url('assets/'); ?>img/bonus.jpg" class="card-img-top" alt="Bonus" width="100px" height="200px">
                              <div class="card-body">
                                   <h3>Bonus kemitraan B-Community</h3>
                                   <p class="card-text">Pengalaman puluhan tahun didunia direct sales membuat B-Community menjadi platform yang disegani.</p>
                              </div>
                         </div>
                         </div>
                         <div class="col-4">
                              <div class="card">
                                   <img src="<?= base_url('assets/'); ?>img/reward.jpg" class="card-img-top" alt="Marketplace" width="100px" height="200px">
                              <div class="card-body">
                                   <h3>Reward B-Community</h3>
                                   <p class="card-text">Melahirkan jutaan konsumen loyal dan ribuan agen dengan penghasilan yang besar.</p>
                              </div>
                         </div>
                         </div>
                    </div>
                    <br> 
                    <br> 
                    <br> 
                    </div>
               </div>
               <!--  Marketplace & Reward akhir -->
               <br><br>
          <div class="container">
               <!-- Testimoni -->
               <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                         <div class="w-full d-flex justify-content-center align-content-center">
                              <div class="testi shadow">
                                   <div class="row"> 
                                        <div class="col d-flex justify-content-center align-items-center flex-column">
                                             <div class="frame">
                                                  <img src="https://images.unsplash.com/photo-1506795660198-e95c77602129?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop" width="100%">
                                             </div>
                                             <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, aperiam.</p>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col"></div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <div class="w-full d-flex justify-content-center align-content-center">
                              <div class="testi shadow">
                                   <div class="row"> 
                                        <div class="col d-flex justify-content-center align-items-center flex-column">
                                             <div class="frame">
                                                  <img src="https://images.unsplash.com/photo-1564839056816-1166a56891a0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzV8fGdpcmwlMjBzZXh5fGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60" width="100%">
                                             </div>
                                             <p class="mt-2">rem ipsum dolor, sit amet consectetur adip Loisicing elit. Dicta, aperiam.</p>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col"></div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                         <i class="fa-solid fa-chevron-left" style="color: black;"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                         <i class="fa-solid fa-angle-right" style="color: black;"></i>
                    </span>
                    <span class="sr-only">Next</span>
               </button>
               </div>
               <!-- Testimoni Akhir -->
               <br><br>
          </div>
          <!-- Footer -->
          <footer class="bg-success">
               <div class="row container pt-4">
                    <div class="col">
                         <h2>Info Kami</h2>
                         <br>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.674519854048!2d106.82628137606625!3d-6.306423561719982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edb7a3004d11%3A0x3af7d406f0678521!2sGenbox%20Academy!5e0!3m2!1sid!2sid!4v1686378950133!5m2!1sid!2sid" width="100%" height="345px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col">
                         <h2>Contact Kami</h2>
                         <br>
                         <form>
                         <div class="form-group">
                         <label for="nama" style="color: white;">Nama</label>
                         <input type="text" class="form-control" id="nama" aria-describedby="emailHelp">
                         </div>
                         <div class="form-group">
                         <label for="exampleInputEmail1" style="color: white;">Email address</label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         </div>
                         <div class="form-group">
                         <label for="exampleFormControlTextarea1" style="color: white;">Example textarea</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                         <button type="submit" class="btn btn-warning">Submit</button>
                         </form>
                    </div>
               </div>
               <br><br><br>
          </footer>
          <!-- Footer Akhir -->
     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

     </body>
</html>