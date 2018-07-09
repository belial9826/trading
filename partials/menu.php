<?php
$menUno='';
$menDos = "";
$menTre = "";
$menCua = "";
$menCin = "";
$menSei = "";
$menSie = "";

    switch(basename($_SERVER['PHP_SELF'])){

        case 'index.php':
            $menUno=' activa';
        break;
        case 'nosotros.php':
            $menDos=' activa';
        break;
        case 'estados-financieros.php':
            $menDos=' activa';
        break;
        case 'que-hacemos.php':
            $menTre=' activa';
        break;
        case 'proyectos-desarrollados.php':
            $menCua=' activa';
        break;
        case 'contactenos.php':
            $menCin=' activa';
        break;
        
    }
?>
<nav class="navbar navbar-default " role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuPlegable">
        <span class="sr-only">Desplegar navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="menuPlegable">
        <ul class="nav navbar-nav">   
            <li class="menu-item <?php echo $menDos; ?>"><a href="index.php" >INICIO </a> </li>
            <li class="menu-item <?php echo $menTre; ?>"><a href="nosotros.php" >COMPAÑIA </a>  </li>
            <li class="menu-item <?php echo $menCua; ?> dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >ASESORIAS </a> 
                <ul class="dropdown-menu " >          
                    <li class="menu-item"> <a href="trading.php">TRADING </a>  </li>  
                    <li class="menu-item"> <a href="masternodos.php">MASTERNODOS </a>  </li>     
                    <li class="menu-item"> <a href="asesoria-personalizada.php">ASESORIAS PERSONALIZADAS </a>  </li>    
                </ul>  
            </li>
            <li class="menu-item <?php echo $menCua; ?> dropdown"><a href="analisis.php" >ANALISIS </a>      
            </li>
            <li class="menu-item <?php echo $menCua; ?>"><a href="tienda.php" >TIENDA </a> </li>
            <li class="menu-item <?php echo $menCua; ?>"><a href="seminarios.php" >SEMINARIOS </a> </li>
            <li class="menu-item <?php echo $menSei; ?>"><a href="contactenos.php" >CONTÁCTENOS </a> </li>  
        </ul>
    </div>
</nav>

