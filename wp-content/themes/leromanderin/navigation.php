<?php
$pages = get_pages();
$part1 = array();
$part2 = array();
$part3 = array();

// Build subdivisions in upper nav menu for parts of the novel.
if ($pages) {
  foreach($pages as $page) {
    $custom = get_post_meta($page->ID);
    if ($custom['page'][0] && $custom['page'][0] == 'chapitre') {
      if ($custom['part'][0] && $custom['part'][0] == 1) {
        $part1[] = $page;
      } else if ($custom['part'][0] && $custom['part'][0] == 2) {
        $part2[] = $page;
      } else if ($custom['part'][0] && $custom['part'][0] == 3) {
        $part3[] = $page;
      } 
    } 
  }
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li <?php if ($current == '/') echo 'class="active"' ?>><a href="<?php echo site_url() ?>" title="Retourner &grave; l'accueil du site" alt="Retourner &grave; l'accueil du site">Accueil</a></li>
          <li class="dropdown <?php if ($current == 'chapitre') echo ' active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Acc&eacute;der aux chapitres" alt="Acc&eacute;der aux chapitres">Chapitres <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php
              if (count($part1) > 0) {
                echo '<li class="nav-header">Partie 1</li>' . "\n";
                foreach($part1 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '" title="Cliquez ici pour lire le ' . $chap->post_title . ' du roman" alt="Cliquez ici pour lire le ' . $chap->post_title . ' du roman">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
              <?php
              if (count($part2) > 0) {
                echo '<li class="divider"></li>' . "\n";
                echo '<li class="nav-header">Partie 2</li>' . "\n";
                foreach($part2 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '" title="Cliquez ici pour lire le ' . $chap->post_title . ' du roman" alt="Cliquez ici pour lire le ' . $chap->post_title . ' du roman">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
              <?php
              if (count($part3) > 0) {
                echo '<li class="divider"></li>' . "\n";
                echo '<li class="nav-header">Partie 3</li>' . "\n";
                foreach($part3 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '" title="Cliquez ici pour lire le ' . $chap->post_title . ' du roman" alt="Cliquez ici pour lire le ' . $chap->post_title . ' du roman">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
              <?php
              if (count($part4) > 0) {
                echo '<li class="divider"></li>' . "\n";
                echo '<li class="nav-header">Partie 4</li>' . "\n";
                foreach($part4 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '" title="Cliquez ici pour lire le ' . $chap->post_title . ' du roman" alt="Cliquez ici pour lire le ' . $chap->post_title . ' du roman">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
            </ul>
          </li>
          <li><a href="#social" class="to-comments" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Comments', 'Go To Comments']);" title="Acc&eacute;der aux commentaires de cette page" alt="Acc&eacute;der aux commentaires de cette page">Commenter</a></li>
          <li <?php if ($current == 'newsletter') echo 'class="active"' ?>>
            <a href="<?php echo site_url('/newsletter/') ?>" title="Aller &grave; la page d'abonnement &grave; la liste d'information pour être pr&eacute;venu des nouveaux chapitres" alt="Aller &grave; la page d'abonnement &grave; la liste d'information pour être pr&eacute;venu des nouveaux chapitres" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Newsletter', 'Go To Newsletter']);">Recevoir un mail aux prochains chapitres</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact/') ?>" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Contact', 'Go To Contact']);" title="Aller &grave; la page de contact" alt="Aller &grave; la page de contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>