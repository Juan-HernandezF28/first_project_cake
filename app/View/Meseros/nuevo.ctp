<div>
<table>

<thead>
    <tr>
        <h1>Crear Mesero</h1>
        <td> <?php echo $this->Form->create('Mesero'); ?> </td>
        <td> <?php echo $this->Form->input('dni'); ?> </td>
        <td> <?php echo $this->Form->input('nombre'); ?> </td>
        <td> <?php echo $this->Form->input('apellido'); ?> </td>
        <td> <?php echo $this->Form->input('telefono'); ?> </td>
    
    </tr>
</thead>
    <footer>
    <tr><button > <?php echo $this->Form->end('crear mesero'); ?></button> </tr>
</footer>
<button type="button"> <?php echo $this->Html->link('Return', array('controller'=>'meseros', 'action'=>'index')); ?> </button>
