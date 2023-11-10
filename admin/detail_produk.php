







<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&family=Poppins:ital,wght@0,100;0,300;0,500;0,900;1,100&display=swap" rel="stylesheet">
    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="detail_produk.css">
    <title>Document</title>
  </head>
  <body>

   <!-- navbar -->
 <nav class="navbar navbar-expand-lg  mx-4">
<div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="" alt="vokamart">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> <!-- Menggunakan ms-auto untuk meratakan ke kanan -->
        <li class="nav-item mx-4">
          <a class="nav-link" href="produk.php">Produk Kami</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="akun.php">Akun</a>
        </li>
        <li class="nav-item mx-4">
          <a class="nav-link" href="#">Keranjang</a>
        </li>
      </ul>
    </div>
</div>
</nav>
<!-- akhir navbar -->




    <!-- <div class="produk-deskripsi">
      <div class="div">
        <img class="vector" src="img/vector-2.svg" />
        <img class="img" src="img/vector-3.svg" />
        <div class="judul-dan-harga">
          <img class="vector-2" src="img/vector-1.svg" />
          <div class="text-wrapper-7">KIT LEGO MOBIL JEEP</div>
          <div class="text-wrapper-8">Rp6.000.000</div>
        </div>
        <div class="pilih-warna">
          <div class="text-wrapper-9">Pilih Warna</div>
          <div class="frame">
            <div class="frame-2">
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
            </div>
          </div>
        </div>
        <div class="pilih-ukuran">
          <div class="text-wrapper-9">Pilih Ukuran</div>
          <div class="scroll-ukuran">
            <div class="frame-2">
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
              <div class="frame-3"></div>
            </div>
          </div>
        </div>
        <div class="gambar">
          <div class="image-wrapper"><img class="image" src="img/image-2.png" /></div>
          <div class="scroll-gambar">
            <div class="frame-4">
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="rectangle"></div>
              <div class="rectangle"></div>
              <div class="rectangle-2"></div>
              <div class="rectangle-3"></div>
            </div>
          </div>
        </div>
        <div class="deskripsi-barang">
          <div class="text-wrapper-10">Deskripsi</div>
          <div class="text-wrapper-11">Kategori Produk</div>
          <p class="p">
            Lorem ipsum dolor sit amet consectetur. Quam non viverra aliquam venenatis auctor at consequat nec dolor.
            Ultrices felis ipsum orci potenti aliquet ac in ullamcorper. Quam sit tincidunt et diam vulputate tincidunt
            sed. Nulla vitae auctor quam molestie nulla tincidunt in. Elit felis gravida neque morbi scelerisque sit
            amet feugiat interdum. Sodales ultricies vitae sed donec id. Euismod
          </p>
        </div>
        <div class="pilih-jumlah">
          <div class="text-wrapper-12">Atur Jumlah:</div>
          <div class="text-wrapper-13">Warna, Ukuran</div>
          <div class="text-wrapper-14">Subtotal: -</div>
          <div class="text-wrapper-15">Stok: 10</div>
          <div class="button-tambah">
            <div class="div-wrapper"><div class="text-wrapper-16">MASUKKAN KERANJANG</div></div>
            <div class="frame-5"><div class="text-wrapper-17">BELI SEKARANG</div></div>
          </div>
          <div class="tambah-kurang">
            <img class="plus-math" src="img/plus-math.png" />
            <div class="frame-6"></div>
            <img class="minus" src="img/minus.png" />
          </div>
        </div>
        <div class="ulasan">
          <div class="overlap">
            <div class="overlap-group">
              <div class="text-wrapper-18">Ulasan</div>
              <div class="kotak-ulasan">
                <div class="frame-7">
                  <div class="frame-8">
                    <img class="ellipse" src="img/ellipse-2-3.svg" />
                    <div class="text-wrapper-19">Margaret</div>
                    <p class="text-wrapper-20">
                      Lorem ipsum dolor sit amet consectetur. Pellentesque justo blandit a tristique non dolor luctus
                      auctor lobortis. Vitae dictum tristique urna est commodo.
                    </p>
                    <img class="star" src="img/star-2.png" />
                    <div class="text-wrapper-21">4.5/5</div>
                  </div>
                  <div class="frame-8">
                    <img class="ellipse" src="img/ellipse-2.svg" />
                    <div class="text-wrapper-19">Margaret</div>
                    <p class="text-wrapper-20">
                      Lorem ipsum dolor sit amet consectetur. Pellentesque justo blandit a tristique non dolor luctus
                      auctor lobortis. Vitae dictum tristique urna est commodo.
                    </p>
                    <img class="star" src="img/star-4.png" />
                    <div class="text-wrapper-21">4.5/5</div>
                  </div>
                  <div class="frame-8">
                    <img class="ellipse" src="img/ellipse-2-2.svg" />
                    <div class="text-wrapper-19">Margaret</div>
                    <p class="text-wrapper-20">
                      Lorem ipsum dolor sit amet consectetur. Pellentesque justo blandit a tristique non dolor luctus
                      auctor lobortis. Vitae dictum tristique urna est commodo.
                    </p>
                    <img class="star" src="img/star.png" />
                    <div class="text-wrapper-21">4.5/5</div>
                  </div>
                  <div class="frame-8">
                    <img class="ellipse" src="img/image.svg" />
                    <div class="text-wrapper-19">Margaret</div>
                    <p class="text-wrapper-20">
                      Lorem ipsum dolor sit amet consectetur. Pellentesque justo blandit a tristique non dolor luctus
                      auctor lobortis. Vitae dictum tristique urna est commodo.
                    </p>
                    <img class="star" src="img/star-3.png" />
                    <div class="text-wrapper-21">4.5/5</div>
                  </div>
                </div>
              </div>
              <div class="text-wrapper-22">4.5/5</div>
              <img class="star-2" src="img/image.png" />
            </div>
            <div class="text-wrapper-23">Lihat Semua</div>
          </div>
        </div>
      </div>
    </div> -->

            

    <div class="card mt-5">
  <div class="row">
    <!-- sisi kanan card belanja -->
    <div class="col-md-7 bg-danger cart">

   
     
      <!-- card keranjang 1 --> 
      
        <div class="row main align-items-center card1 mx-2 ">
          <img src="../images/image 2.png" alt="">
        </div>
        
        <div class="row d-flex flex-nowrap">
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
          <div class="col">
          <img src="../images/image 2.png" alt="">
          </div>
        
        </div>
        <!-- akhir card keranjang 1 -->  
      </div>
       
    </div>


    <!-- sisi kiri card total belanja -->
    <div class="col-md-5 belanja">
      <!-- card total belanja -->
      <div class="border-box">
        <div class="row text-rb" style="padding: 0 0 2vh 0" > Ringkasan Belanja </div>
        <div class="row" style="padding: 0 0 2vh 0" > 
          <div class="col text-tb">Total Barang:</div>
          <div class="col text-right harga-barang" id="price">137.000</div>
        </div>
                   
        <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0 0 0;">
          <div class="col text-tbel">Total Belanja: </div>
          <div class="col text-right harga-total" id="price2" > 137.00</div>
        </div>
        <button class="btn btn-danger">CHECKOUT</button>
      </div>
      <!-- akhir card total belanja -->
    </div>

  </div>            
</div>

<!-- Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>