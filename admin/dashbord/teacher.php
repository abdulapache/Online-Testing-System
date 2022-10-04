<?php
include 'header.php';
include 'footer.php';
?>
    <div class="content-wrapper">

    <h3>Teachers</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="teachertable.php">+Add Teacher</a></font></td>
        </a>
      </tr>
    </table>

    
          <table border=2 bordercolor=green align=center width=900>
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
            include 'dbconnect.php';
            $query="SELECT * FROM teacher";
            $q=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($q)){
              
            ?>

            <tr align=center>
              
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
                
                <button >
                <a href='teacherdelete.php?r=<?php echo $row['t_id']?>' onclick="confirm('are you sure');"><i class="fas fa-trash"></i></a>
                </button></td>
                <td>
                
                <button>
                  <a href='updateteacher.php?r=<?php echo $row['t_id']?>'>Edit</a>
               </button> 
               </td>
            </tr>
            <?php
}
            ?>
          </table>

</div>

</form>
</body>
</html>