<?php 
 
      include('connection.php'); 
        if(isset($_GET['view'])){ 
        $id= $_GET['view']; 
        $query = "SELECT * FROM pelajar WHERE id={'id'}";  
        $result = mysqli_query($conn,$query); 
 
    $i= 1; 
 
      while($row = mysqli_fetch_assoc($result)){ 
          $id = $row['id']; 
          $nama = $row['nama']; 
          $emel = $row['emel']; 
          $notel = $row['notel']; 
          $sesi= $row['sesi']; 
          $program = $row['program']; 
     
    echo  "<tr>"; 
    echo  "<th scope='row'>$i</th>"; 
    echo  "<td>$nama</td>"; 
    echo  "<td>$emel</td>"; 
    echo  "<td>$notel</td>"; 
    echo  "<td>$sesi</td>"; 
    echo  "<td>$program</td>"; 
    echo  "</tr>"; 
    $i++; 
      } 
    } 
?>