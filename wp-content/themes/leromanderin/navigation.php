<?php
$pages = get_pages();
$part1 = array();
$part2 = array();
if ($pages) {
  foreach($pages as $page) {
    $custom = get_post_meta($page->ID);
    if ($custom['page'][0] && $custom['page'][0] == 'chapitre') {
      if ($custom['part'][0] && $custom['part'][0] == 1) {
        $part1[] = $page;
      } else if ($custom['part'][0] && $custom['part'][0] == 2) {
        $part2[] = $page;
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
          <li <?php if ($current == '/') echo 'class="active"' ?>><a href="<?php echo site_url() ?>">Accueil</a></li>
          <li class="dropdown <?php if ($current == 'chapitre') echo ' active' ?>">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Chapitres <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <?php
              if (count($part1) > 0) {
                echo '<li class="nav-header">Partie 1</li>' . "\n";
                foreach($part1 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
              <?php
              if (count($part2) > 0) {
                echo '<li class="divider"></li>' . "\n";
                echo '<li class="nav-header">Partie 2</li>' . "\n";
                foreach($part2 as $chap) {
                  echo '<li><a href="' . get_permalink($chap->ID) . '">' . $chap->post_title . '</a></li>' . "\n";
                }
              }
              ?>
            </ul>
          </li>
          <li><a href="#social" class="to-comments" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Comments', 'Go To Comments']);">Commenter</a></li>
          <li><a href="#" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Newsletter', 'Go To Newsletter']);">Recevoir un mail aux prochains chapitres</a></li>
          <li><a href="#" onclick="_gaq.push(['_trackEvent', 'Nav Actions', 'Contact', 'Go To Contact']);">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>