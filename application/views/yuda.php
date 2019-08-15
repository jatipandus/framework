
<html>

<link href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('asset/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('asset/js/bootstrap.min.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/jquery.dataTables.min.css'); ?>">
<script type="text/javascript" charset="utf8" src="<?php echo base_url('asset/js/jquery.dataTables.min.js'); ?>"></script>
<style type="text/css">

  body{background-image:url(<?php echo base_url('asset/aa.jpg'); ?>); background-size:cover}


</style>

  <body >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Bang Okleq</a>
    </div>
 
    <ul class="nav navbar-nav navbar-right">
      <li></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="panel-body table-responsive">

<!-- <div class="container"> -->
     <?php foreach ($dosen as $key => $value) { ?>

    <table id="ngoding" border="1" class="table table-striped" cellspacing="0" width="40%">
      <thead>
        <tr class="danger">      
           <th>NIY</th>                
                    <th>Nama</th>
                    <th>Alamat</th>
        </tr>
      </thead>
  
      <tbody>
      <tr class="active">
        
           <td><?php echo $value['niy']."<br/>"; ?></td>
                    <td><?php echo $value['nama']."<br/>"; ?></td>
                    <td><?php echo $value['alamat']."<br/>"; ?></td>
      </tr>
  
      </tbody>
    </table>

<br>
    <table id="ngoding" border="1" align="center" class="table table-bordered" cellspacing="0" width="20%">
      <thead>
        <tr class="success">      
           <th>NIM</th>                
                    <th>Nama</th>
        </tr>
      </thead>
       <?php foreach ($value['mhs'] as $key => $value2) { ?>
      <tbody>
      <tr class="info"> 
        
           <td><?php echo $value2['nim']."<br/>"; ?></td>
                    <td><?php echo $value2['namamhs']."<br/>"; ?></td>
               
      </tr>
  
      </tbody>
      <?php }?> 
    </table>
<?php echo '<br>'; } ?>

</div>

</body>


</html>
