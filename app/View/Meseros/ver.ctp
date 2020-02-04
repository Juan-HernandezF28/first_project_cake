<div class="container pt-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h2>Detalles del meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>
                    <p><storng> DNI: </strong> <?php echo $mesero['Mesero']['dni']; ?>  </p>
                    <p><storng> Telefono: </strong> <?php echo $mesero['Mesero']['telefono']; ?>  </p>
                    <p><storng> Created: </strong> <?php echo $mesero['Mesero']['created']; ?>  </p>
                    <p><storng> Modified: </strong> <?php echo $mesero['Mesero']['modified']; ?>  </p>
                </div>

                <?php echo $this->Html->link('Return', array('controller'=>'meseros', 'action'=>'index'), array('class' => 'btn btn-danger')); ?>
            </div>
        </div>
    </div>
</div>