<?php
include 'header.php';
include 'footer.php';
?>
  <div class="content-wrapper">
 <h3>Student</h3>
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="studenttable.php">+Add Student</a></font></td>
        </a>
      </tr>
    </table>
   <table border=2 bordercolor=green align=center width=900>
            <form class="form-inline ml-3" action="searchstudent.php" method="POST">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    
            <tr align=center>
              
              <th>Name</th>
              <th>Fname</th>
              <th>Phone</th>
              <th>Course</th>
              <th>F.CNIC</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>



<tbody id="result">
  
</tbody>

          </table>

</div>

      <script>
$(document).ready(function(){
  load_data();
  function load_data(query)
  {
    $.ajax({
      url:"searchstudent.php",
      method:"post",
      data:{query:query},
      success:function(data)
      {
        $('#result').html(data);
      }
    });
  }
  
  $('#search').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();      
    }
  });
});
</script>
</form>
</body>
</html>