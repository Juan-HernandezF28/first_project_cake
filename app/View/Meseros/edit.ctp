
<div class="container">
    <table class="table table-striped table-bordered ">

    <thead class="table-dark">
        <tr>
        <h1>Editar informacion de Mesero</h1>

    <td > <?php echo $this->Form->create('Mesero'); ?> </td>
    <td> <?php echo $this->Form->input('dni'); ?> </td>
    <td> <?php echo $this->Form->input('nombre'); ?> </td>
    <td> <?php echo $this->Form->input('apellido'); ?> </td>
    <td> <?php echo $this->Form->input('telefono'); ?> </td>

        </tr>
    
    </thead>
        <footer>
        <tr><button class='btn btn-dar'> <?php echo $this->Form->end('Save Mesero'); ?></button> </tr>
    </footer>
    <button type="button" class="btn btn-dark"> <?php echo $this->Html->link('Return', array('controller'=>'meseros', 'action'=>'index')); ?> </button>


    /**pruebas con bootstrap */


    <div class='container'>
        <br>
        <form action='' class=''> 
        <label for='nombre'>Nombre: </label>
        <input class='form control' id='nombre' tipe='text' placeholder='Nombre:'>
        <br>
        <label for='apellido'>Apellido: </label>
        <input class='form control' id='apellido' tipe='text' placeholder='Apellido:'>
    
    
    
    </div
