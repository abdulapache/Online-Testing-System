<?php
include 'header.php';

$search=$_POST['search'];
$query="SELECT * FROM teacher WHERE t_name LIKE '%".$search."%' OR t_address LIKE '".$search."'";
$q=mysqli_query($con,$query);
?>
 
  <div class="content-wrapper">

    <h3>Teachers</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="teach.php">+Add Teacher</a></font></td>
        </a>
      </tr>
    </table>

    
          <table border=2 bordercolor=green align=center width=800>
            <form class="form-inline ml-3" action="searchteacher.php" method="POST">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
            <tr align=center>
              <th>Id</th>
              <th>Name</th>
              <th>Qualification</th>
              <th>Phone</th>
              <th>Subject</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Update</th>
            </tr>
            <?php
        
          
            while($row=mysqli_fetch_array($q)){
              
            ?>

            <tr align=center>
              <td><?php echo $row['t_id']?></td>
              <td><?php echo $row['t_name']?></td>
              <td><?php echo $row['t_qualification']?></td>
              <td><?php echo $row['t_phone']?></td>
              <td><?php echo $row['t_subject']?></td>
              <td><?php echo $row['t_username']?></td>
              <td><?php echo $row['t_password']?></td>
              <td><?php echo $row['t_address']?></td>
              <td>
               <img src="upload/<?php echo $row['t_pic']?>" width=30>
              </td>
              <td>
                
                <button>
                <a href='dbdelete.php?r=<?php echo $row['t_id']?>'>Delete</a>
                </button></td>
                <td>
                
                <button>
                  <a href='update.php?r=<?php echo $row['t_id']?>'>Edit</a>
               </button> 
               </td>
            </tr>
            <?php
}
            ?>
          </table>

</div>


           
       
              
             
            
              
            
       

  

    
         
    
           
                

         

                  
            

                

       
              

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</form>
</body>
</html>
