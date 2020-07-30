<?php

  /**
  * Plugin Name: WOHM
  * Description: melodiamalodika
  */

  function lol(){
    echo '<script>
    const epilepsia = (() =>{
      const btns = document.getElementById("bgs").getElementsByTagName("button");
      let set = 0;

      const btn = btns;

        btn.addEventListener("click", () =>{
          const bgs = document.getElementById("bgs").getElementsByTagName("div");
          if(set === 0){
            btn.style.backgroundColor = "red";
            set = 1;
          }
          else{
            btn.style.backgroundColor = "black";
            set = 0;
          };
        });
    });

    epilepsia();


    </script>';
  };

 add_action("wp_footer", "lol");

 ?>
