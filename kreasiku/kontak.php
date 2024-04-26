 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KreasiKu</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

<!-- Father icons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- My Style-->
  
    <link rel="stylesheet" href="kreasiku_style.css">
</head>

<body>

      <!--Navbar Start -->
   <nav class="navbar">
    <a href="kreasiku_index.php" class="navbar-logo">Kreasi<span>Ku</span></a>

    <div class="navbar-nav">
        <a href="kreasiku_index.php">Home</a>
        <a href="tentangkami.php">Tentang Kami</a>
        <a href="menu.php"> Menu</a>  
        <a href="product..php"> Produk</a>
        <a href="kontak.php"> Kontak</a>

    </div> 

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping"><i data-feather="shopping-cart"></i></a>
      <a href="#" id="crafting-menu"><i data-feather="menu"></i></a>
    </div>

    </nav>

    <!-- start kontak section -->

    <section id="contact" class="contact">
        <h2><span>Kontak</span>Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dicta illo repudiandae! Consequatur, a culpa?</p>

    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.955158288349!2d112.73168647481403!3d-7.358923592650098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e4b9e9bd186d%3A0xa8766b21490509f6!2sJl.%20Anggrek%20No.40%2C%20Krajan%20Wetan%2C%20Kureksari%2C%20Kec.%20Waru%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur%2061256!5e0!3m2!1sen!2sid!4v1713357322757!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        
        <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" placeholder="no hp">
            </div>
            <div class="input-group">
                <i data-feather="inbox"></i>
                <input type="text" placeholder="pesan">
            </div>
            <button type="submit" class="btn">kirim pesan</button>
        </form>

    </div>

    </section>
   
<!-- end -->
           
        <!-- footer -->
        <footer>
            <div class="sosial">
                <a href="#"><i data-feather="instagram"></i></a>
                <a href="#"><i data-feather="twitter"></i></a>
                <a href="#"><i data-feather="facebook"></i></a>
            </div>


            <div class="links">
            <a href="kreasiku_index.html">Home</a>
            <a href="tentangkami.html">Tentang Kami</a>
            <a href="menu.html">Menu</a>
            <a href="kontak.html">Kontak</a>
            </div>

            <div class="credit">
                <p>Created by <a href="">hanafiandreanatha</a>. | &copy; 2023.</p>
            </div>
        </footer>
        <!-- footer end -->

    <!-- feather icons-->
    <script>
      feather.replace()
    </script>
    <!-- kontak section end-->


     <!-- JavaScript -->
  <script src="js/script.js"></script>

  </body>

  </html>
