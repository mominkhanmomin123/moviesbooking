
<?php
  include "header.php";
  ?>
 
    <div class="form-container my-5">
        <form action="logincheck.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="username" required>
              
             
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
           
            <button type="submit" name="confirm-submit" class="btn nav-login loginbtn">Login</button>
           
          </form>
    </div>
    
<?php
  include "footer.php";
  ?>
</body>
</html>