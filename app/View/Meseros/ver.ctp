<body>
    <div class="container">
        <table class="table table-striped table-bordered ">

        <thead class="table-dark">
            <tr>
                <h2>Detalles del meser@ <?php echo $mesero['Mesero']['nombre']; ?></h2>
                <p><storng> DNI: </strong> <?php echo $mesero['Mesero']['dni']; ?>  </p>
                <p><storng> Telefono: </strong> <?php echo $mesero['Mesero']['telefono']; ?>  </p>
                <p><storng> Created: </strong> <?php echo $mesero['Mesero']['created']; ?>  </p>
                <p><storng> Modified: </strong> <?php echo $mesero['Mesero']['modified']; ?>  </p>

            </tr>
        
        </thead>

        <button type="button" class="btn btn-dark"> <?php echo $this->Html->link('Return', array('controller'=>'meseros', 'action'=>'index')); ?> </button>
</body>    