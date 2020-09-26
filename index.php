<!DOCTYPE html>


<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/dist/app.css">
  <script src="/dist/app.js"></script>
  <title>TodoApp</title>
</head>
<body class="bg-blackBg">
  <header>
    <div class="grid grid-cols-1">
      <div class="bg-blackMenu text-white pl-4 py-4 font-black"><h1>TodoApp</h1></div>
    </div>
  </header>
  <main class="grid grid-cols-12">
    <!-- Menú Listas -->
    <div class="text-center pt-5 pl-10 col-span-3">
      <div class="listasTareas text-blackText text-left text-bold">
      <ul>
        <li>Completadas</li>
        <li>Haciendo</li>
      </ul>
      </div> 
    </div>
    <!-- Tareas Agregadas -->
    <div class="text-center text-white pt-5 pr-5 col-span-6">
    <div class=""
        <?php
          require 'conexion.php';
          require 'feed.php';
          require 'functions.php';
          $todos = getTodos($pdo); 
        ?>
        <!-- Agrega una tarea -->
        <form method="POST">
          <input type="text" name="title" class="appearance-none block w-full bg-blackMenu text-blackText border border-blackText rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" placeholder="Agrega una tarea. Presiona enter para guardar">
          <br>
          <input type="submit" hidden="true">
        </form>
        <div class="grid grid-cols-1 gap-4 tareas">
        <!-- Loop Tareas -->
        <?php
        foreach ($todos as $todo) { 
          if ($todo['states'] == 1) {
          continue;
          }
          ?>
          <div class="tarea bg-blackMenu border-b-2 border-blackText mb-4"> 
          <?php if ($todo['states'] != 1) { ?>
              <a href="marcar-como-listo.php?id=<?php echo $todo['id'] ?>" class="items-end">
                Terminada
              </a>
          <?php } ?>
            

            <div><h2 class="uppercase text-3xl"><?php echo $todo['title']; ?></h2></div>
            <div><p><?php echo $todo['cuerpo']; ?></p></div>
          </div>
        


        <?php }
        ?>
        </div>
      </div>
    </div>
  </main>
</body>
</html>