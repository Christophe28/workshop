<?php
  $server_url = "http://localhost/";
?>
<nav>
      <ul class="menu">
        <li><a href="<?php echo $server_url ?>workshop/index.php">Accueil</a></li>
        <li>
          Technique
          <ul class="sub-menu">
            <li><a href="<?php echo $server_url ?>./otherPage/technique/robot.php">Robot.txt</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/technique/framework.php">Framework</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/technique/picture.php">Images</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/technique/balises.php">Balises</a></li>
          </ul>
        </li>
        <li>
          Outils
          <ul class="sub-menu">
            <li><a href="<?php echo $server_url ?>./otherPage/tools/google.php">Google</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/tools/validator.php">Validateur</a></li>
          </ul>
        </li>
        <li>
          Astuces
          <ul class="sub-menu">
            <li><a href="<?php echo $server_url ?>./otherPage/tips/errorSeo.php">Erreur SEO</a></li>
          </ul>
        </li>
        <li>
          Dossiers
          <ul class="sub-menu">
            <li><a href="<?php echo $server_url ?>./otherPage/folders/seoRedaction.php">Rédaction SEO</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/folders/googleIndexing.php">Indexation Google</a></li>
            <li><a href="<?php echo $server_url ?>./otherPage/folders/trend.php">Tendances</a></li>
          </ul>
        </li>
      </ul>
    </nav>