<h2> Lista de mesas </h2>
 <?php echo $this->Html->link('crear mesa', array('controller'=>'mesas', 'action'=>'add'), array('class' => "btn btn-dark")); ?>
<table class='table'>
    <thead class='table-dark'>
        <tr>
            <th>Serie</th>
            <th>Puestos</th>
            <th>Posicion</th>
            <th>Created</th>
            <th> Modificado </th>
            <th>Responsable</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <?php foreach($mesas as $mesa): ?>
        <tr class="fila">  
            <td> <?php echo $mesa['Mesa']['serie']; ?>   </td>
            <td> <?php echo $mesa['Mesa']['puestos']; ?>   </td>        
            <td> <?php echo $mesa['Mesa']['posicion']; ?>   </td>         
            <td> <?php echo $this->Time->format('d-m-Y; h:i A', $mesa['Mesa']['created']); ?>   </td>  
            <td> <?php echo $this->Time->format('d-m-Y; h:i A', $mesa['Mesa']['modified']); ?>   </td>        
            <td> <?php echo $this->Html->link($mesa['Mesero']['nombre'].' '.$mesa['Mesero']['apellido'], array('controller'=>'meseros', 'action' => 'ver', $mesa['Mesero']['id'])); ?> </td>
            <td> <?php echo $this->Html->link('Editar', array('controller'=>'mesas','action'=>'edit', $mesa['Mesa']['id'])); ?> </td>            
            <td> <?php echo $this->Form->postLink('Eliminar', array('action'=>'delete', $mesa['Mesa']['id']), array('comfirm'=>'Eliminar mesa'.$mesa['Mesa']['serie'].'?')); ?> </td>
         </tr>
    <?php endforeach; ?>    
</table>
   