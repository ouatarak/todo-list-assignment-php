<?php
  session_start(); 
 
  if ( !isset( $_SESSION['todos'] ) )
  { 
    $_SESSION['todos'] = array();
  }
  
  if ( isset( $_POST )  ) 
  {          
      array_push( $_SESSION['todos'], $_POST['todo'] );
    }
 
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To-Do Assignment PHP</title>
</head>
<body>
<h1>Add a To-Do</h1>
    <p>
    <?php echo $message;  ?>
  </p>
  <form action="./index.php" method="POST">

    <label for="todo">
      Enter a new task:
      <input type="text" name="todo" id="todo">
    </label>
    <input type="submit" value="Add to list">

    <input type="reset" name="Reset"  value="Reset"   /> 
    
  </form>
 
  <?php if ( !empty( $_SESSION['todos'] ) ) : ?>
<h2>To-Do Items:</h2>
    <ul>
      <?php foreach ( $_SESSION['todos'] as $todo ) :  ?>
        <li>
          <input type="checkbox">
          <?php echo $todo; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

<h3>Active To-Dos</h3>
    <ul>
        <form action="" method="POST">
            <input type="checkbox" name="asdf">
                <input type="submit">
        </form>
        <?php 
            $check = isset($_POST['asdf']) ? '1' : '0';
            echo $check;
            var_dump($check);
        ?>
    </ul>
<h4>Completed To-Dos</h4>
  <p>
    <?php echo $Hello; ?>
  </p>
  <p>
    <?php echo $Hello; ?>
  </p>
   

<h5>Debugging</h5>
  
  <pre>
  Click to Expand!
    <strong>SESSION:</strong>
    <?php var_dump( $_SESSION ); ?>
  </pre>
  <pre>
    <strong>POST:</strong>
    <?php var_dump( $_POST ); ?>
  </pre>
  
</body>
</html>