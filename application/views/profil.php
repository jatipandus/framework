<!DOCTYPE html>
<html lang="en">
<head>
  <title>RWeb</title>
<style type="text/css">

  body{background-image:url(<?php echo base_url('asset/aa.jpg'); ?>); background-size:cover}
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}
.footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    position: absolute;
    bottom: 0px;
}
.header {
  overflow: hidden;
  background-color: #333;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
  color: white;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
  color: white;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

</style>
</head>
<body>

<div class="header">
  <a href="#" class="logo">Rekayasa Web</a>
  <div class="header-right">
    <a href="<?php echo base_url('apaya/navbar'); ?>">Home</a></a>
    <a class="active" href="<?php echo base_url('apaya/navbar2'); ?>">Profil</a></a>
    <a href="<?php echo base_url('apaya/navbar3'); ?>">Kontak</a></a>
  </div>
</div>
  
<div class="container">
  <h3>My Profil</h3>
  <p><h1>Jati Pandu Saputra </h1></p>
  <h2>1500018108</h2>
</div>
<div class="footer"></div>

</body>
</html>
