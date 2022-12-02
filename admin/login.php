<?php
require_once '../include/int.php';
if ($data['id']) {
  header("Location:index.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="dist/css/styles.css" />
</head>

<body class="bg-gray-100">
  <div class="w-11/12 mx-auto sm:w-96 flex_center min-h-screen py-10">
    <div class="text-left w-fit h-fit bg-white shadow-lg rounded overflow-hidden">
      <?php
        // $_SESSION['PT_User'] = $user_id;                      
            // header("Location:index.php");
      if (isset($_POST['submit'])) {        
        if (isset($_POST['email']) && isset($_POST['password'])) {
          $email = $db->EscapeString($_POST['email']);
          $password = md5($_POST['password']);        
          
          if (!empty($email) || !empty($password)) {         
           
            $select = $db->QueryFetchArray("SELECT * FROM `users` WHERE email='$email' AND password='$password' AND admin=1");           
         
            if (count($select) > 0) {             
              $user_id = $select['id'];
              $_SESSION['PT_User'] = $user_id;
             header("Location:index.php");
            } else {
              echo '<p style="color: red;">Wrong Email or Password</p>';
            }
          } else {
            echo '<p style="color: red;">Fild is Empty</p>';
          }
        }
      }

      ?>
      
      <div style="
            background-image: url('https://i.postimg.cc/XJ7NvTb6/istockphoto-1221025677-170667a.jpg');
          " class="flex_center p-8 bg-gradient-to-r from-yellow-600 to-red-600 text-white">
        <h2>ADMIN</h2>
      </div>
      <form action="login.php" method="post" class="p-6">
        <div class="space-y-5">
          <div>
            <label for="email" class="block" for="email">Email</label>
            <input name="email" type="email" placeholder="Email" id="email" class="w-full px-4 py-2 mt-2 border rounded focus:outline-none focus:ring-1 focus:ring-blue-600" />

          </div>

          <div>
            <label for="password" class="block">Password</label>
            <input name="password" type="password" placeholder="Password" id="password" class="w-full px-4 py-2 mt-2 border rounded focus:outline-none focus:ring-1 focus:ring-blue-600" />
          </div>
          <div class="flex items-baseline justify-between">
            <button class="btn bg-blue-500 hover:bg-blue-600 focus:bg-blue-400 active:bg-blue-700 text-white px-5 py-2 focus:ring rounded" name="submit" type="submit" value="submit">
              Login
            </button>
            <a href="forgot-password.php" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>