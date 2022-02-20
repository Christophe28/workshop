<nav aria-label="Main Navigation">
  <ul>
    <li>
      <a href="<?php echo $server_url;?>">Accueil</a>
    </li>
    <li class="dropdown">
    <button
        type="button"
        class="dropdown__title"
        aria-expanded="false"
        aria-controls="sweets-dropdown"
      >
      <a href='<?php echo $server_url;?>Technique'>Technique</a>
    </button>
    <ul class="dropdown__menu" id="sweets-dropdown">
        <li><a href="<?php echo $server_url;?>Technique/Robots.txt">Robots.txt</a></li>
        <li><a href="<?php echo $server_url;?>Technique/Framework">Framework</a></li>
        <li><a href="<?php echo $server_url;?>Technique/Images">Images</a></li>
        <li><a href="<?php echo $server_url;?>Technique/Balises">Balises</a></li>
    </ul>
    </li>


    <li class="dropdown">
    <button
        type="button"
        class="dropdown__title"
        aria-expanded="false"
        aria-controls="sweets-dropdown"
      >
      <a href='<?php echo $server_url;?>Outils'>Outils</a>  
    </button>
    <ul class="dropdown__menu" id="sweets-dropdown">
        <li><a href="<?php echo $server_url;?>Outils/Google">Google</a></li>
        <li><a href="<?php echo $server_url;?>Outils/Validateur">Validateur</a></li>
    </ul>
    </li>

    <li class="dropdown">
    <button
        type="button"
        class="dropdown__title"
        aria-expanded="false"
        aria-controls="sweets-dropdown"
      >
      <a href='<?php echo $server_url;?>Astuces'>Astuces</a>  
    </button>
    <ul class="dropdown__menu" id="sweets-dropdown">
    <li><a href="<?php echo $server_url;?>Astuces/Erreur_SEO">Erreur SEO</a></li>
    </ul>
    </li>

    <li class="dropdown">
    <button
        type="button"
        class="dropdown__title"
        aria-expanded="false"
        aria-controls="sweets-dropdown"
      >
      <a href='<?php echo $server_url;?>Dossier'>Dossier</a>  
    </button>
    <ul class="dropdown__menu" id="sweets-dropdown">
    <li><a href="<?php echo $server_url;?>Dossier/Redaction_SEO">Rédaction SEO</a></li>
        <li><a href="<?php echo $server_url;?>Dossier/Indexation_Google">Indexation Google</a></li>
        <li><a href="<?php echo $server_url;?>Dossier/Tendances">Tendances</a></li>
    </ul>
    </li>


  </ul>
</nav>