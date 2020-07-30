const epilepsia = (() =>{
  const btns = document.getElementById("bgs").getElementsByTagName("button");
  let set = 0;

  foreach(btns){
    const btn = btns[*];
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
  };
});

epilepsia();
