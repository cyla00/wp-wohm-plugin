<?php

  /*
  Plugin Name: WOHM
  Description: |♠️|seroktikamelokdika|♠️|, ||Tutti pensano a cambiare il mondo, ma nessuno pensa a cambiar se stesso||🃏.
  Author: Cyla00
  Author URI: https://github.com/cyla00
  */
  echo "<div>";
  echo "<button type='button' name='button'>WOHM</button>";
  echo "</div>";

  function epilepsia(){
    echo "<script>


    const h1 = [document.getElementsByTagName('h1')];
    i = 0;
      while(i < h1.lenght){
        console.log(h1);
      };


    </script>";
  };



add_action('wp_footer', 'epilepsia');

 ?>
