<!DOCTYPE html>
<html>
    <head>
      <title> Hey, yo! </title>  
    </head>
    
    <body>

    <h1> Hello, World! <h1>

    <ul>

    <?php foreach($tasks as $task) : ?>
        
        <li><?php echo $task->body; ?><li>
    
    <?php endforeach; ?>

    </ul>

    </body>
</html>