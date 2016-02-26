<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
      <?php echo $cakeDescription ?>:
      <?php echo $title_for_layout; ?>
    </title>
    <?php
        echo $this->Html->meta('icon');

        //echo $this->Html->css('cake.generic');
      

        echo $this->Html->script(array(
         
          'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
          '/js/cakebootstrap'

          ));

        echo $this->Html->script('jquery-ui-1.10.4');

        echo $this->Html->css('jquery-ui-1.10.4');

        echo $this->Html->css(array('bootstrap'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');

        //Datepicker
        /*
        echo $this->Html->script(array(
          'http://code.jquery.com/jquery-1.10.2.js',
          'http://code.jquery.com/ui/1.10.4/jquery-ui.js'
          ));
          */

    ?>
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">-->

</head>

<body>
  <div id="container">
    <div id="header">
      <h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
      
    </div>
    <div id="content">

      <?php echo $this->Session->flash(); ?>
     
      <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
      <?php echo $this->Html->link(
          $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
          'http://www.cakephp.org/',
          array('target' => '_blank', 'escape' => false)
        );
      ?>
    </div>
  </div>
  
</body>
</html>