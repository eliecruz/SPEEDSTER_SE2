<?php


session_start();
    if(isset($_SESSION['user_id'])){
    include('../connect.php');

    
    session_unset();
    session_destroy();
    ?>
      <script type="text/javascript">
      window.location.href = '../Home.php';
      </script>

    <?php 
    }
    else {

      ?>
      <script type="text/javascript">
      window.location.href = '../Home.php';
      </script>

      <?php 

    }


?>