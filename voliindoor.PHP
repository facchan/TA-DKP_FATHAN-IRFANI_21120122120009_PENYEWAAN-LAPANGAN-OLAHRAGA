<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
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

  .container {
	max-width: 1170px;
	margin: 0 auto;
  }

  header {
	height: 150px;
	width: 100%;
	background-color: rgb(0, 0, 0);
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

  body{
    background-color: rgb(34, 32, 32);
  }

.input{
    margin: 165px 28% 0px 27%;
    padding: 35px 87px 420px 0px;
    border: 3px solid white;
    border-radius: 50px;
}

.data{
    position: absolute;
    background-color: grey;
    top: 200px;
    left: 30%;
    right: 31%;
    color: rgb(255, 255, 255);
    font-family: 'Courier New', Courier, monospace;
    padding: 20px 0px;
    border-radius: 45px;
}
form{
    margin-left: 55px;
}
.nama input{
    padding: 10px 25px;
    margin-left: 150px;
    font-size: 16px;
}

.lama input{
    padding: 10px 39px;
    margin-left: 34px;
}
.submit input{
    padding: 25px;
    border-radius: 20px;
    margin-left: 19%;
    background-color: #3e583c;
    border-style: none;
    opacity: 0.9;
    color: rgb(255, 255, 255);
    font-family: 'Courier New', Courier, monospace;
    font-size: 18px;
}
.submit input:hover{
    opacity: 1;
    background-color: #3e583c;
}
.pembayaran select{
    padding: 10px 83px;
    margin-left: 94px;
}
.metode select{
    padding: 10px 34px;
    margin-left: 129px;
}
    </style>
</head>
<body>
<header>
        <div class="container">
            <div class="header-ha">
                    <!-- GAMBAR BOSS -->
                <img class="logo" src="asset/logoo.png"><br>
                <a href="index.php">Home</a>
                <a href="https://docs.google.com/spreadsheets/d/1PvY6n1fWafl9EdBBIp-7GF9_U6_EqnCWi9kFzZCFkxQ/edit#gid=0" target="blank">Pricelist</a>
            </div>
        </div>
    </header>
    <div class="input">
            <div class="data">
                <?php 
            error_reporting(E_ERROR | E_PARSE);
            $nama=$_GET['name'];
            $jam=$_GET['jam'];
            $harga= 85;
            
            $lapangan= "Lapangan Voli";
            $via = $_GET['payment'];
            
            
            

            ?>
            <center>
            <p> Lapangan Voli</p>
            <p> Biaya sewa per hari : 85 K</p>
            <p>Silahkan isi formulir dibawah ini</p>
            </center>
            <br>
            <form action="buktivoliindoor.php" method="get"> 
                <div class="nama">
                    <p>Nama <input type="text" name="name" required placeholder="masukkan nama"></p>
                </div>
                <br>
                <div class="lama">
                    <p>Lama sewaan(Jam)  <input type="number" min="0" max="24" name="jam" value="jhs" required ></p>
                </div>
                <br>
                <div class="pembayaran">
                    <p>Pembayaran 
                        <select name="payment">
                            <option value="tunai" >TUNAI</option>
                            <option value="non" >NON-TUNAI</option>
                        </select>
                    </p>
                </div>
                <br>
                <div class="submit">
                    <a href="buktivoliindoor.php">
                        <input type="submit" name="submit" value="Konfirmasi Pesanan">
                    </a>
                </div>
            </form>
            <br>

        </div>
    </div>
</body>
</html>