<h2>Lista de meseros</h2>


    <?php echo $this->Html->link('Crear meseros', array('controller' => 'meseros', 'action' => 'nuevo'), array('class' => "btn btn-secondary")); ?>

<div class="container mt-4">
    <table class="table">

    <thead class="table-dark">
        <tr>
                <th><strong>Id</strong></th>
                <th><strong>Nombre</strong></th>
                <th><strong>Apellido</strong></th>
                <th><strong>Detalles</strong></th>
                <th><strong>Editar</strong></th>
                <th><Strong>Eliminar</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($meseros as $mesero): ?>
            <tr class="fila">
                <td><?php echo $mesero['Mesero']['id'] ?></td>
                <td><?php echo $mesero['Mesero']['nombre'] ?></td>
                <td><?php echo $mesero['Mesero']['apellido'] ?></td>
                <td><?php echo $this->Html->link('Detalle', array('controller' => 'meseros', 'action' => 'ver', $mesero['Mesero']['id']), array('class' => "btn btn-secondary")); ?></td>
                <td><?php echo $this->Html->link('Editar', array('controller' => 'meseros', 'action' => 'edit', $mesero['Mesero']['id']), array('class' => "btn btn-secondary")); ?></td>
                <td><?php echo $this->Form->postLink('delete', array("controller" => "meseros", 'action' => 'delete', $mesero['Mesero']['id']), array('class' => "btn btn-danger"), array('confirm' => 'Estas seguro de eliminar este mesero: ' . $mesero['Mesero']['nombre'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    
    
</table>
</div>