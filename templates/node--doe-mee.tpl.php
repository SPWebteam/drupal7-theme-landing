<?php
// set variables for background image for leftside
$background_image_uri = $content['field_cta_image']['#items'][0]['uri'];
$background_image = image_style_url('splitscreen', $background_image_uri);
$state = drupal_get_query_parameters(['state']);


// retrieve overlay setting from node and add as css class later
$i = $content['field_cta_overlay'][0]['#markup'];
$overlay = '';
switch ($i){
  case '10%':
    $overlay = 'overlay-10';
    break;
  case '20%':
    $overlay = 'overlay-20';
    break;
  case '30%':
    $overlay = 'overlay-30';
    break;
  case '40%':
    $overlay = 'overlay-40';
    break;
  case '50%':
    $overlay = 'overlay-50';
    break;
  case '60%':
    $overlay = 'overlay-60';
    break;
  case '70%':
    $overlay = 'overlay-70';
    break;
}


// Get taxonomy information
$personen = isset($node->field_personen['und']) ? $node->field_personen['und'] : '';


// Check for copyright information and show it
$copyright = '';
if (!empty($content['field_cta_image_copyright'][0]['#markup'])){
  $copyright = 'Foto: '.$content['field_cta_image_copyright'][0]['#markup'];
}
?>




<div class="webformslider">
  <a href="#" class="webformslider-close close">x</a>
  <?php print render($content['webform']); ?>
</div>

<div class="fullscreen clearfix <?php print $classes; ?>"<?php print $attributes; ?>>
  
  <div class="leftside" style="background-image:url(<?php print $background_image; ?>)">
    <div class="site-logo">
      <a href="/" title="Home" rel="home" id="logo">
        <svg version="1.1" id="logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="258px" height="146.5px" viewBox="0 0 258 146.5" enable-background="new 0 0 258 146.5" xml:space="preserve">
        <path class="name letter-s" d="M36.569,94.437v9.165c0,7.44,2.42,14.011,12.109,14.011c7.09,0,10.204-6.397,10.204-12.972
        c0-10.899-8.995-15.049-16.953-19.893c-9.339-5.361-17.298-10.38-23.003-16.954c-5.537-6.569-8.823-14.528-8.823-25.943
        c0-24.392,14.705-36.846,38.228-36.846c26.466,0,39.959,17.645,38.575,42.035H58.882c-0.345-7.612,0-17.991-10.032-18.684
        c-6.228-0.518-9.861,2.94-10.551,8.647c-0.864,7.783,3.113,11.766,9.167,15.914c11.417,7.269,21.275,11.764,28.369,18.339
        c7.091,6.573,11.244,15.219,11.244,30.962c0,24.909-13.838,38.747-39.094,38.747c-27.848,0-39.609-15.566-39.609-32.691V94.437
        H36.569z"></path>
        <path class="name letter-p" d="M101.262,137.852V8.116h36.152c11.761,0,28.715,1.04,37.191,10.728c7.09,7.955,8.478,17.642,8.478,28.196
        c0,14.008-3.287,29.752-17.129,36.15c-10.55,5.189-22.831,3.631-34.247,4.152v50.509H101.262z M131.707,63.988
        c5.707-0.171,12.282,0.522,17.123-3.286c3.113-3.459,3.806-8.647,3.806-13.143c0-5.017-0.518-12.629-5.708-15.051
        c-2.938-1.037-7.091-1.037-11.937-1.037h-3.284V63.988z"></path>
        <path class="tomato" d="M242.259,86.753c-3.819-3.82-8.578-5.841-13.758-5.841c-4.485,0-7.484,1.498-9.471,2.489l-0.075,0.041
        l-0.079,0.037c-0.299,0.15-0.441,0.493-0.34,0.811l1.182,3.609c0.088,0.275,0.348,0.462,0.639,0.462l7.571,0.014
        c0.29,0,0.546,0.186,0.639,0.463c0.089,0.28-0.01,0.583-0.246,0.754l-6.117,4.461c-0.235,0.168-0.333,0.471-0.245,0.748l2.327,7.204
        c0.095,0.277-0.006,0.58-0.24,0.752c-0.237,0.173-0.557,0.173-0.793,0l-6.131-4.438c-0.234-0.169-0.557-0.169-0.79,0l-6.133,4.438
        c-0.236,0.173-0.555,0.173-0.787,0c-0.238-0.172-0.337-0.475-0.248-0.752l2.33-7.204c0.089-0.277-0.01-0.58-0.243-0.748
        l-6.121-4.461c-0.235-0.171-0.334-0.474-0.244-0.754c0.09-0.277,0.349-0.463,0.643-0.463l7.57-0.014
        c0.292,0,0.548-0.187,0.639-0.462l1.179-3.609c0.104-0.317-0.041-0.66-0.34-0.811l-0.077-0.037l-0.078-0.041
        c-1.983-0.991-4.985-2.489-9.469-2.489c-5.18,0-9.938,2.021-13.76,5.841c-5.077,5.077-8.108,12.955-8.108,21.072
        c0,16.701,15.093,30.279,33.644,30.279s33.645-13.578,33.645-30.279C250.371,99.708,247.339,91.828,242.259,86.753z"></path>
        <image src="https://verkiezingen-dev.sp.nl/sites/all/themes/landing/logo.png" xlink:href=""></image>
        </svg>
      </a>
    </div>
    <div class="titlewrapper">
      <div class="titleblock">
        <h1 class="sidetitle"><?php if(isset($content['field_cta_title'][0]['#markup'])) { print $content['field_cta_title'][0]['#markup']; } ?></h1>
        <div class="subtitle"><?php if(isset($content['field_cta_subtitle'])) { print render($content['field_cta_subtitle']);} ?></div>
        <button class="btn webformslider-open webformslider-open-left" id="cta-primary"><?php if (isset($content['field_cta_button'])) { print render($content['field_cta_button']); }?></button>
        <div class="read-more mobile-only"><a href="#read-more" class="btn btn-ghost-color2 small scroll-to">Meer weten &#x21B4;</a></div>
      </div>
    </div>
    <div class="leftoverlay <?php print $overlay; ?>">
      <div class="copyright"><?php print $copyright; ?></div>
    </div>
  </div>

  <div class="rightside">
    
    <?php print render($title_prefix); ?>
    <?php if (!$page && $title): ?>
      <header>
        <h2><?php print $title_attributes; ?><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      </header>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <section class="article-content"<?php print $content_attributes; ?>>
      <a id="read-more"></a>
      <h1><?php print render($title); ?></h1>
      
      <?php $counter_format = field_get_items('node', $node, 'field_counter_format'); ?>
        
        <?php if (!empty($counter_format[0]['value'])) {
           include('inc/doe-mee-counter.tpl.php');
        }
        ?>

      <article><?php print render($content['body']); ?></article>
      <?php
        if (!empty($personen)){
          print '<div id="personen-wrapper">';
            print "<h2>Betrokken SP'ers</h2>";
            foreach ($personen as $x=>$persoon){
              $persoon_image_uri = $persoon['taxonomy_term']->field_introductie_afbeelding['und'][0]['uri'];
              $persoon_image_style = 'persoon';
              $persoon_image = image_style_url($persoon_image_style, $persoon_image_uri);

              print '<div class="persoon">';
              print '<div class="afbeelding"><img src="'.$persoon_image.'"></div>';
              print '<h3>'.$persoon['taxonomy_term']->name.'</h3>';
              print '<span class="functie">'.$persoon['taxonomy_term']->field_rol_of_functie['und'][0]['value'].'</span>';
              print '</div>';
            }
          print '</div>';
        }
      ?>
    </section>
    <div class="footer-short">
      <p>De gegevens die je op deze site invult worden veilig opgeslagen door de SP. Meer informatie over het gebruik lees je in onze <a href="https://www.sp.nl/privacy" target="_blank">privacy voorwaarden</a></p>
      <p>&copy; <a href="https://www.sp.nl" target="_blank">SP</a> Snouckaertlaan 70, 3811 MB Amersfoort</p>
    </div>
  </div>
</div>
