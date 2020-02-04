<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Don Juan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a> <?php echo $this->Html->Link('Home', array('controller' => 'restaurant', 'action' => "index"), array('class' => 'nav-link')); ?> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a> <?php echo $this->Html->Link('Meseros', array('controller' => 'meseros', 'action' => "index"), array('class' => 'nav-link')); ?>  </a>
      </li>
    </ul>
  </div>
</nav>