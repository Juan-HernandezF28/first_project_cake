<h2>Lista de meseros</h2>
<button type="button"> <?php echo $this->Html->link('Crear meseros', array('controller' => 'meseros', 'action' => 'nuevo')); ?></button>
<div>
    <table>

    <thead>
        <tr>
                <td><strong>Id</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Apellido</strong></td>
                <td><strong>Detalles</strong></td>
                <td><strong>Editar</strong></td>
                <td><Strong>Eliminar</strong></td>
        </tr>
    </thead>
    
    <?php foreach($meseros as $mesero): ?>
        <tr>
            <td><?php echo $mesero['Mesero']['id'] ?></td>
            <td><?php echo $mesero['Mesero']['nombre'] ?></td>
            <td><?php echo $mesero['Mesero']['apellido'] ?></td>
            <td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id'])); ?></td>
            <td><?php echo $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'edit', $mesero['Mesero']['id'])); ?></td>
            <td><?php echo $this->Form->postLink('delete', array('action' => 'delete', $mesero['Mesero']['id']), array('confirm' => 'Estas seguro de eliminar este mesero: '.$mesero['Mesero']['nombre'])); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<footer> </footer>
</div>