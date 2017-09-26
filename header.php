<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tjitske</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head();?>
</head>
<body>

<!--- Header with menu, logo and social links ------>

  <div class="header">
    <div id="logo">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/Images/logo (2).png" alt="logo"></a>
    </div>

    <!--- The menu triggering the gallery's with Jquery desktop and mobile ------>

    <i id="dropdown" class="fa fa-bars fa-5x" aria-hidden="true"></i>

    <div id="menu">

      <?php $mensen = get_page_by_title("mensen");?>
      <?php $dieren = get_page_by_title("dieren");?>
      <?php $corfu = get_page_by_title("corfu");?>
      <?php $kreta = get_page_by_title("kreta");?>
      <?php $canaria = get_page_by_title("canaria");?>
      <?php $corso2007 = get_page_by_title("corso2007");?>
      <?php $corso2008 = get_page_by_title("corso2008");?>
      <?php $corso2009 = get_page_by_title("corso2009");?>
      <?php $corso2011 = get_page_by_title("corso2011");?>
      <?php $hummel = get_page_by_title("hummel");?>
      <?php $cruijff = get_page_by_title("cruijff");?>
      <?php $northernmeeting = get_page_by_title("northernmeeting");?>
      <?php $apenheul = get_page_by_title("apenheul");?>


      <a href="<?php echo get_page_link($mensen->ID) ?>"><li class="link">Mensen</li></a>
      <a href="<?php echo get_page_link($dieren->ID) ?>"><li class="link">Dieren</li></a>

      <div class="dropdown">
        <li id="marginDown">Vakantie</li>
        <div class="dropdown-content">
          <a href="<?php echo get_page_link($corfu->ID) ?>">Corfu</a>
          <a href="<?php echo get_page_link($kreta->ID) ?>">Kreta</a>
          <a href="<?php echo get_page_link($canaria->ID) ?>">Gran canaria</a>
        </div>
      </div>

      <div class="dropdown">
        <li id="marginDown">Evenementen</li>
        <div class="dropdown-content">
          <a href="<?php echo get_page_link($corso2007->ID) ?>">Corso 2007</a>
          <a href="<?php echo get_page_link($corso2008->ID) ?>">Corso 2008</a>
          <a href="<?php echo get_page_link($corso2009->ID) ?>">Corso 2009</a>
          <a href="<?php echo get_page_link($corso2011->ID) ?>">Corso 2011</a>
          <a href="<?php echo get_page_link($hummel->ID) ?>">Hummel Zuidhorn</a>
          <a href="<?php echo get_page_link($cruijff->ID) ?>">Johan Cruijff Court</a>
          <a href="<?php echo get_page_link($northernmeeting->ID) ?>">Northernmeeting</a>
          <a href="<?php echo get_page_link($apenheul->ID) ?>">Apenheul</a>
        </div>
      </div>

    </div>

<!--- Social media links desktop and mobile ------>

    <div id="social-btn">
      <a href="https://www.facebook.com/tjitske.leemburg" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
      <a href="https://nl.linkedin.com/in/tjitske-leemburg-5a2a322a" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
      <a href="https://twitter.com/tjits6" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
      </div>

      <div id="social-btn-mobile">
        <a href="https://www.facebook.com/tjitske.leemburg" target="_blank"><i class="fa fa-facebook-square fa-5x" aria-hidden="true"></i></a>
        <a href="https://nl.linkedin.com/in/tjitske-leemburg-5a2a322a" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a>
        <a href="https://twitter.com/tjits6" target="_blank"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></a>
        </div>
  </div>
