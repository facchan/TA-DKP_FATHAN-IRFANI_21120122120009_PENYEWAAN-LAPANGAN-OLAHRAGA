<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Bukti</title>
    
    <style>
          .rating {
          display: inline-block;
        vertical-align: middle;
        margin-top: 0px;}


          .rating input {
          display: none;}


          .rating label {
          float: right;
          color: #ddd;
          font-size: 30px;
          padding: 0;
          cursor: pointer;}


          .rating label:before {
          content: '\2605';
        float: right;}


          .rating input:checked ~ label {
          color: #ffdd00;}


          .rating label:hover,
          .rating label:hover ~ label {
          color: #ffdd00;
        }

        *{
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
  .container {
	max-width: 1170px;
	margin: 0 auto;
  }

  header {
	height: 100px;
	width: 100%;
	background-color: black;
	position :fixed;
	top: 0;
	z-index: 10;
  }
  .header-ha {
	text-align: center;
  }
  .header-he{
    color: white;
    font-size: 50px;
    text-align: center;
    padding: 15px;
    text-decoration: underline;
  }

  .header-ha .logo{
	padding-top: 25px;
	width: 200px;
  }

  body{
    background-color: rgb(34, 32, 32);
  }
  .semuanya{
    margin-top: 180px;
    text-align: center;
  }

  .tambahan{
    border: 3px solid white;
    padding: 0px 300px 400px 300px;
    border-radius: 50px;
  }
  .title{
    margin: 0 36%;
    font-size: 25px;
    background-color: grey;
    padding: 5px;
    border-radius: 20px;
  }
  .pesan{
    margin-left: 32%;
    position: absolute;
    text-align: left;
    color: #ffff;
  }

  .tombol {
    padding: 0px 0px 0px 140px;  
    border-radius: 25px;
    text-align: center;
    margin-top: 10%;
  }

  .btn {
    padding: 12px 24px;
    color: white;
    display: inline-block;  
    border-radius: 25px;
    text-align: center;
    font-size: 18px;
  }
  .done {
    background-color: #414b41;
    margin-top: -50%;
    margin-right: 10px;
  }
  
  .whatsapp {
    background-color: #414b41;
  }
  .fa{
    margin-right: 10px;
  }
        </style>
</head>

<body>
    <header>
            <div class="container">
                <div class="header-ha">
                    <!-- GAMBAR BOSS -->
                <img class="logo" src="asset/logoo.png"><br>
                </div>
            </div>
        </header>
    <?php

    class Pesanan {
        private $nama;
        private $jam;
        private $harga = 85;
        private $lapangan = "Lapangan Voli";
        private $via;
        private $ratingbintang="";

        public function __construct($nama, $jam, $via) {
            $this->nama = $nama;
            $this->jam = $jam;
            $this->via = $via;

        }

        public function getTotalBayar() {
            return $this->jam * $this->harga;
            
        }

        public function getMetodePembayaran() {
            if ($this->via == "tunai") {
                return "Terimakasih! Silahkan datang tepat waktu";
            } else {
                return "Kirim ke rek. 7382937294 a.n SportField";
            }
        }

        public function setrating ($rating){
            $this->ratingbintang=$rating;
        }
        public function tampilbukti() {
            echo '<div class="semuanya">';
            echo '    <span class="tambahan"></span>';
            echo '    <div class="title">';
            echo '        <p>Berikut Ringkasan Pesanan Anda</p>';
            echo '    </div>';
            echo '    <br>';
            echo '    <div class="pesan">';
            echo '        <div class="nama-pesan">';
            echo '            <p>Nama Pemesan: ' . $this->nama . '</p>';
            echo '        </div>';
            echo '        <br>';
            echo '        <div class="lapangan">';
            echo '            <p>Pesanan Anda: ' . $this->lapangan . '</p>';
            echo '        </div>';
            echo '        <br>';
            echo '        <div class="lama">';
            echo '            <p>Lama Sewa: ' . $this->jam . ' Jam</p>';
            echo '        </div>';
            echo '        <br>';
            echo '        <div class="mertode">';
            echo '            Total Bayar: Rp. ' . $this->getTotalBayar() . '.000';
            echo '        </div>';
            echo '        <br>';
            echo '        <div class="bayar">';
            echo '            <p>Pesan: ' . $this->getMetodePembayaran() . '</p>';
            // Tampilkan rating bintang
            echo '    <p>Beri kami tingkat kepuasan Anda!</p>';
            echo '    <div class="rating">';
            $maxbintang = 5;
            for ($i = 1; $i <= $maxbintang; $i++) {
                $hasilbintang = ($i == $this->ratingbintang) ? "checked" : "";
                echo '<input type="radio" id="star' . $i . '" name="rating" value="' . $i . '" ' . $hasilbintang . '>';
                echo '<label for="star' . $i . '"></label>';
            }
            echo '        </div>';
            echo '    </div>';
            echo '    <div class="tombol">';
            echo '        <a href="index.php" class="btn done"><span class="fa fa-solid fa-check"></span>Selesai</a>';
            echo '        <a href="https://api.whatsapp.com/send?phone=6285706998450" class="btn whatsapp"><span class="fa fa-brands fa-whatsapp"></span>Hubungi</a>';
            echo '    </div>';
            echo '</div>';
        }
    }

    $nama = $_GET['name'];
    $jam = $_GET['jam'];
    $via = $_GET['payment'];

    $pesanan = new Pesanan($nama, $jam, $via);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["rating"]) && is_numeric($_POST["rating"]) && $_POST["rating"] >= 0 && $_POST["rating"] <= 5) {
        $rating = $_POST["rating"];
        $pesanan->setrating($rating);
        } else {
        echo "Rating tidak valid!";
        }
      }

    $pesanan->tampilbukti();

    ?>
</body>
</html>
