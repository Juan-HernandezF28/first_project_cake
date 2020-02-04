<div class="container mt-4">


<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-4 mx-auto">
        <div class="card">
            <div class="card-head text-center pt-3">
                <h3>Crear Usuario</h3>
            </div>
            <div class="card-body">
                <div>
                    <?php echo $this->Form->create('Mesero'); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('dni', array('class' => "form-control")); ?>    
                </div>
                <div class="form-group">
                <?php echo $this->Form->input('nombre', array('class' => "form-control")); ?> 
                </div>
                <div class="form-group">
                <?php echo $this->Form->input('apellido', array('class' => "form-control")); ?>  
                </div>
                <div class="form-group">
                <?php echo $this->Form->input('telefono', array('class' => "form-control")); ?> 
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar!</button>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-4">
   <?php echo $this->Html->link('Return', array('controller'=>'meseros', 'action'=>'index'), array('class' => "btn btn-danger")); ?>
    </div>
</div>    
</div>
