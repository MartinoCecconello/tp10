<!-- Comienza código: create.php -->

<?php if (isset($_SESSION['message'])) { ?>
       <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
         <?= $_SESSION['message']?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php session_unset(); } ?>

<?PHP 
    session_unset(); 
  ?>

 <div class="card card-body">
     <div class="card-header">Crear Persona</div>
     <form action="./insert.php" method="POST">
         <div class="form-group">
             <div class="mb-3">
                 <label for="name">Nombre</label>
                 <input type="text" id="name" name="name" class="form-control" placeholder="Escriba su nombre" autofocus required>
             </div>
        
             <div class="mb-3">
                 <label for="surname">Apellido</label>
                 <input type="text" name="surname" class="form-control" placeholder="Escriba su apellido" autofocus required>
             </div>
        
             <div class="mb-3">
                 <label for="name">Teléfono</label>
                 <input type="text" name="phone" class="form-control" placeholder="Escriba su teléfono" autofocus>
             </div>
        
             <div class="mb-3">
                 <label for="name">E-mail</label>
                 <input type="email" name="email" class="form-control" placeholder="Escriba su email" autofocus>
             </div>
         </div>
         <input type="submit" class="btn btn-success" name="create" value="Crear">
     </form>
 </div>
</div>
