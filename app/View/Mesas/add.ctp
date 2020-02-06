<div class="container mt-4">

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-4 mx-auto">
        <div class="card">
            <div class="card-head text-center pt-3">
                <h3>Crear una mesa</h3>
            </div>
            <div class="card-body">
                <div>
                    <?php echo $this->Form->create('Mesa'); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('serie', array('class' => "form-control")); ?>    
                </div>
                <div class="form-group">
                <?php echo $this->Form->input('puestos', array('class' => "form-control")); ?> 
                </div>
                <div class="form-group">
                <?php echo $this->Form->input('posicion', array('class' => "form-control")); ?>  
                </div>
                <div> <?php echo $this->Form->input('mesero_id', array('class' => 'form-control')); ?> </div>
                <div class="form-group">
                     <?php echo $this->Form->end('Crear mesa'); ?>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-md-4">
   <?php echo $this->Html->link('Return to table list', array('controller'=>'mesas', 'action'=>'index'), array('class' => "btn btn-danger")); ?>
    </div>
</div>    
</div>