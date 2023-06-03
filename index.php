<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="swiper-bundle.min.css">

    <style>
        * {
	box-sizing: border-box;
  }
  
  html, body,
  ul, ol, li,
  h1, h2, h3, h4, h5, h6, p, div {
	margin: 0;
	padding: 0;
  }  
  a {
	text-decoration: none;
  }
  
  /* HEADER */
  .container {
	max-width: 1170px;
	margin: 0 auto;
  }

  header {
	height: 150px;
	width: 100%;
	background-color: black;
	position :fixed;
	top: 0;
	z-index: 10;
  }
  .header-ha {
	text-align: center;
  }
  .header-ha .logo{
	padding-top: 25px;
	width: 200px;
  }

  .header-ha a {
	line-height: 65px;
	padding: 0 25px;
	color: white;
	transition: all 0.5s;
  }
  
  .header-ha a:hover {
	background-color: rgba(255, 255, 255, 0.3);
	padding: 10px;
  }
  /* GAMBAR */  
    .gambar{
	padding: 0px 10%;
	padding-top: 155px;
  }
  body{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	background-color: rgb(34, 32, 32);
  }
  .slide-container{
	max-width: 1120px;
	width: 100%;
  }
  /* SLIDE CONTENT 1 */
  .slide-content1{
	margin: 0 40px;
	overflow: hidden;
  }
  .card{
	border-radius: 25px;
	background-color: #FFF;
	border: 3px solid black;
  }
  .image-content{
	display: flex;
	flex-direction: column;
	align-items: left;
  }
  .card-content{
	position: absolute;
  }
  .card-content h2{
	padding-left: 145px;
  }
  .description{
	font-size: 14px;
	padding-left: 149px;
	color: #707070;
	line-height: 19px;
  }
  .image-content{
	position: relative;
	row-gap: 5px;
	padding: 25px 25px 285px 125px;
  }
  .overlay{
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 30%;
	background-color: #414b41;
	border-radius: 22px 12px 12px 22px;
  }
  .card-image{
	position: absolute;
	height: 250px;
	width: 250px;
	left: 20px;
	border-radius: 35px;
	border: 3px solid #fff;
	background: #FFF;
	padding: 3px;
	float: left;
  }
  .card-image .card-img{
	height: 100%;
	width: 100%;
	object-fit: cover;
	border-radius: 35px;
	border: 4px solid #414b41;
  }
  .name{
	font-size: 18px;
	font-weight: 500;
	color: rgb(117, 1, 1);
  }
 
  .button{
	position: absolute;
	border: none;
	font-size: 16px;
	padding: 8px 16px;
	background-color: #414b41;
	border-radius: 6px;
	margin: 14px;
	cursor: pointer;
	top: 230px;
  }
  .button:hover{
	background: #636963;
  }
  .button a{
	color: #fff;
  }
  .harga{
	padding: 8px 10px;
	background-color: #414b41;
	color: white;
	border-radius: 6px;
	position: absolute;
	margin-top: 14px;
	margin-left: 95px;
	top: 230px;
	font-size: 14px;
  }
    </style>
    
  </head>
    <body>
        <header>
            <div class="container">
                <div class="header-ha">
                <img class="logo" src="asset/logoo.png"><br>
                <a href="index.php">Home</a>
                <a href="https://docs.google.com/spreadsheets/d/1PvY6n1fWafl9EdBBIp-7GF9_U6_EqnCWi9kFzZCFkxQ/edit#gid=0" target="blank">Pricelist</a>
                </div>
            </div>
        </header>
        <div class="gambar">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="asset/futsal.jpg" alt="" class="card-img">
                                </div>
                                

                                <div class="card-content">
                                    <h2 class="name">LAPANGAN FUTSAL (INDOOR)</h2>
                                    <div class="description">
                                        <p>•	Sirkulasi udara yang nyaman</p>
                                        <p>•	1 Bola Futsal (Kerusakan ditanggung penyewa)</p>
                                        <p>•	Vending Machine</p>
                                        <p>•	Dekat toilet pria/wanita</p>
                                        <p>•	Dekat tempat ibadah.</p>
                                        <p>•	Tempat istirahat</p>
                                    <button class="button">
                                            <a href="futsall.php">Select</a>
                                    </button>
                                    <div class="harga">
                                        <p>Rp 70.000,- / Jam</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="asset/badminton.jpeg" alt="" class="card-img">
                                </div>
                            

                                <div class="card-content">
                                    <h2 class="name">LAPANGAN BADMINTON (INDOOR)</h2>
                                    <div class="description">
                                            <p>•	Net 1 buah (Kerusakan ditanggung penyewa)</p>
                                            <p>•	Sirkulasi udara yang nyaman</p>
                                            <p>•	Dekat toilet pria/wanita</p>
                                            <p>•	Dekat tempat ibadah</p>
                                            <p>•	Tempat istirahat</p>
                                            <p>•	Vending Machine</p>
                                            <button class="button">
                                                <a href="badminton.php">Select</a>
                                        </button>
                                        <div class="harga">
                                            <p>Rp 30.000,- / Jam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDE 2 -->
            <br><br>
            <div class="hihi">
                <p></p>
            </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="asset/voliindoor.jpeg" alt="" class="card-img">
                            </div>
                            <div class="card-content">
                                    <h2 class="name">LAPANGAN VOLI (INDOOR)</h2>
                                    <div class="description">
                                        <p>•    1 Bola Voli (Kerusakan ditanggung penyewa)</p>
                                        <p>•	Sirkulasi udara nyaman</p>
                                        <p>•	Vending Machine</p>
                                        <p>•	Toilet Pria/Wanita</p>
                                        <p>•	Dekat dengan Ruang Ibadah</p>
                                        <p>•	Tempat istirahat</p>
                                        <button class="button">
                                            <a href="voliindoor.php">Select</a>
                                    </button>
                                    <div class="harga">
                                        <p>Rp 85.000,- / Jam</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="card swiper-slide">
                        <div class="image-content">
                                <span class="overlay"></span>

                                <div class="card-image">
                                    <img src="asset/basketindoor.jpeg" alt="" class="card-img">
                                </div>
                                <div class="card-content">
                                    <h2 class="name">LAPANGAN BASKET (INDOOR)</h2>
                                    <div class="description">
                                        <p>•	Alas beton halus</p>
                                        <p>•	1 Buah bola voli (Kerusakan ditanggung penyewa)</p>
                                        <p>•	Tempat istirahat</p>
                                        <p>•	Wastafel Umum</p>
                                            <button class="button">
                                                    <a href="basketindoor.php">Select</a>
                                            </button>
                                        <div class="harga">
                                            <p>Rp 80.000,- / Jam</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>  
      
</body>

    <!-- Swiper JS -->
<script src="swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="script.js"></script>
</html>