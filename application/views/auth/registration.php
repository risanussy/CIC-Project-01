<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>
        <?= $title; ?>
    </title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
     <div class="container">   
          <a class="navbar-brand" href="#">
          <img src="<?= base_url('assets/img/log/bc.jpg'); ?>" width="50" height="50" class="d-inline-block align-top" alt="">
          B-Community
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
     
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bantuan</a>
            </li>
            </ul>
            <style>
            @media (min-width: 992px) {
                .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
                padding-top: 70px;
                }

                .nav-link:hover::after {
                content: "";
                display: block;
                border-bottom: 3px solid green;
                width: 50%;
                margin: auto;
                padding-bottom: 5px;
                margin-bottom: -8px;
                }
            }
            </style>
            <form class="form-inline my-2 my-lg-0">
            <a  href="<?= base_url('auth') ?>" class="btn btn-outline-success my-2 my-sm-0 mr-2 tombol">Login</a>
            </form>
         </div>

</nav>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/checkout/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
  <form action="<?= base_url('flip'); ?>" method="post">
<div class="row">
  <div class="col-md-4 order-md-2 mb-4">
  <div class="ps-form__package-product-info">
    <h3 class="ps-form__heading">Produk Yang dipilih</h3>
     <div class="form-group mb-4">
        <label>Produk</label>
          <select name="produk" id="select_product" class="form-control">
            <option value="">Pilih Produk</option>
            <option value="produk1">BPJS 3 bulan</option>
            <option value="produk2">BPJS 6 bulan</option>
            <option value="produk3">BPJS 1 tahun</option>
           </select>
             </div>
                <div class="content">
                  <div class="ps-block__content">
                    <table class="table ps-block__products mb-5" id="list_table_product_reg">
                      <tbody>
                <tr class="data-empty">
                 <td scope="col" class="pl-3 pr-2 text-center product_checkout py-4" style="border: 1px solid #dddddd;" colspan="2">
                   <h5 id="selected_product_text" class="text-muted">Produk belum ada yang di pilih.</h5>
       </td>
         </tr>
           </tbody>
   </table>

      </div>
    </div>
</div>
                            
<script>
  const selectProduct = document.getElementById('select_product');
  const selectedProductText = document.getElementById('selected_product_text');

  selectProduct.addEventListener('change', function() {
    selectedProductText.textContent = selectProduct.value !== '' ? 'Anda memilih ' + selectProduct.options[selectProduct.selectedIndex].text : 'Produk belum ada yang dipilih.';
  });
</script>
                     
  <div class="card kotak">
    <div class="card-header kotak-header-success">
      <h5 class="card-title">Biaya Pendaftaran <span>350.000 </span></h5>
    </div>
  </div>
    <input type="hidden" name="bank_type" value="virtual_account">
    <div class="card kotak mt-3">
    <div class="ps-form__courier-info">
        <div class="ps-block--shopping-total">
            <h4 class="mt-4 ml-4">Bank Pengiriman</h4>
            <div class="row">
                <div class="col-md-12 my-3 ml-4">
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiomandiri" name="bank_account" class="custom-control-input" value="mandiri">
                        <label class="custom-control-label" for="customRadiomandiri">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_mandiri.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiodanamon" name="bank_account" class="custom-control-input" value="danamon">
                        <label class="custom-control-label" for="customRadiodanamon">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_danamon.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiocimb" name="bank_account" class="custom-control-input" value="cimb">
                        <label class="custom-control-label" for="customRadiocimb">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_cimb.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiomaybank" name="bank_account" class="custom-control-input" value="maybank">
                        <label class="custom-control-label" for="customRadiomaybank">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/maybank.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiosinarmas" name="bank_account" class="custom-control-input" value="sinarmas">
                        <label class="custom-control-label" for="customRadiosinarmas">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_sinarmas.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiobni" name="bank_account" class="custom-control-input" value="bni">
                        <label class="custom-control-label" for="customRadiobni">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_bni.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiobri" name="bank_account" class="custom-control-input" value="bri">
                        <label class="custom-control-label" for="customRadiobri">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_bri.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                    <div class="custom-control custom-radio mb-2">
                        <input type="radio" id="customRadiopermata" name="bank_account" class="custom-control-input" value="permata">
                        <label class="custom-control-label" for="customRadiopermata">
                            <img src="https://demo4.cic-webpro.com/aqassets/bank/bank_permata.png" class="img img-thumbnail img-responsive" />
                        </label>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
      </div>    
        </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Information Account</h4>
      <form class="needs-validation" novalidate>
      <div class="form-group mb-2">
         <label>Sponsor</label>
           <div class="input-group">
              <input type="text" name="sponsor" id="sponsor" class="form-control noSpace text-lowercase" placeholder="Search Username Referral" value="">
                <div class="input-group-append">
                  <button class="btn btn-secondary searchUsername" data-usertype="S0IvcFBOSkpIMWl2STQxUEVyc0EwZz09" id="btn_search_sponsor" data-url="https://demo4.cic-webpro.com/frontend/searchsponsor" data-form="newmember" type="button" style="font-size: 13px;">
                    <i class="fa fa-search"></i> Search
                        </button>
                              </div>
                          </div>
                    </div>
             <div class="form-group mb-4" id="sponsor_info"></div>
          <hr class="mb-4">
      <div class="mb-3">
          <label for="name">Fullname</label>
          <div class="input-group">
            <input type="text" class="form-control" name="fullname" id="name" placeholder="Fullname" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="nik">NIK</label>
          <div class="input-group">
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Enter your NIK" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <div class="form-group mb-4">
                 <label>No. HP/WA</label>
                    <div class="input-group">
                       <div class="input-group-append"><span class="input-group-text bg-white" style="font-size: 14px;">+62</span></div>
                         <input type="number" name="no_hp" class="form-control phonenumber pl-3" placeholder="Enter your HP or WA number">
                                 </div>
                            </div>
                          </div>
        <div class="col-sm-6">
           <div class="form-group mb-4">
                    <label>Email Address</label>
                        <input type="email" name="email" class="form-control text-lowercase loading-input" placeholder="Enter Your Email">
                          </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                                    <label>NPWP <sup>*</sup></label>
                                    <input type="text" name="npwp" class="form-control npwp" placeholder="Enter your ID Number">
                                </div>                                    
                                <div class="ps-form__address-info">
                                <h3 class="ps-form__heading">Information Address</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-4">
                                            <label>Provinsi<sup>*</sup> </label>

                                            <select name="provinsi" class="form-control rajaongkir-province select_province" data-url="https://demo4.cic-webpro.com/address/selectprovince">
                                                <option value="" selected disabled>Pilih Provinsi / Wilayah</option>
                                                <option value="1" data-area="2">Bali - WILAYAH 2</option><option value="2" data-area="2">Bangka Belitung - WILAYAH 2</option><option value="3" data-area="1">Banten - WILAYAH 1</option><option value="4" data-area="2">Bengkulu - WILAYAH 2</option><option value="5" data-area="1">DI Yogyakarta - WILAYAH 1</option><option value="6" data-area="1">DKI Jakarta - WILAYAH 1</option><option value="7" data-area="3">Gorontalo - WILAYAH 3</option><option value="8" data-area="2">Jambi - WILAYAH 2</option><option value="9" data-area="1">Jawa Barat - WILAYAH 1</option><option value="10" data-area="1">Jawa Tengah - WILAYAH 1</option><option value="11" data-area="1">Jawa Timur - WILAYAH 1</option><option value="12" data-area="2">Kalimantan Barat - WILAYAH 2</option><option value="13" data-area="3">Kalimantan Selatan - WILAYAH 3</option><option value="14" data-area="3">Kalimantan Tengah - WILAYAH 3</option><option value="15" data-area="2">Kalimantan Timur - WILAYAH 2</option><option value="16" data-area="3">Kalimantan Utara - WILAYAH 3</option><option value="17" data-area="2">Kepulauan Riau - WILAYAH 2</option><option value="18" data-area="2">Lampung - WILAYAH 2</option><option value="19" data-area="3">Maluku - WILAYAH 3</option><option value="20" data-area="3">Maluku Utara - WILAYAH 3</option><option value="21" data-area="2">Nanggroe Aceh Darussalam (NAD) - WILAYAH 2</option><option value="22" data-area="3">Nusa Tenggara Barat (NTB) - WILAYAH 3</option><option value="23" data-area="4">Nusa Tenggara Timur (NTT) - WILAYAH 4</option><option value="24" data-area="4">Papua - WILAYAH 4</option><option value="25" data-area="4">Papua Barat - WILAYAH 4</option><option value="26" data-area="2">Riau - WILAYAH 2</option><option value="27" data-area="4">Sulawesi Barat - WILAYAH 4</option><option value="28" data-area="3">Sulawesi Selatan - WILAYAH 3</option><option value="29" data-area="3">Sulawesi Tengah - WILAYAH 3</option><option value="30" data-area="3">Sulawesi Tenggara - WILAYAH 3</option><option value="31" data-area="3">Sulawesi Utara - WILAYAH 3</option><option value="32" data-area="2">Sumatera Barat - WILAYAH 2</option><option value="33" data-area="2">Sumatera Selatan - WILAYAH 2</option><option value="34" data-area="2">Sumatera Utara - WILAYAH 2</option>                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label>Address <sup>*</sup></label>
                                    <textarea name="alamat" class="form-control text-capitalize" rows="2" placeholder="Address & No & RT/ RW.."></textarea>
                                </div>
                                <button class="btn btn-success btn-lg" type="submit" style="width: 100%;">Continue to checkout</button>
                            </div>
                        </div>
        <hr class="mb-4">
      </form>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="form-validation.js"></script>
  </body>
</html>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
