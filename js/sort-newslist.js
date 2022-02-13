
function change20() {
  selbox = document.getElementById("selbox").value;
  // 子要素を変数に代入
  let child = document.getElementById("newsCard2"); 
  // 親要素を取得
  let oya = child.parentNode; 
  // 子要素を変数に代入

  if (selbox == "info") {
    //ここまでのコードは問題ない。以下が問題あり。
    // // console.log('change4');

    oya.style.display = "none";
    //日付を表示
    /*       document.getElementClassName("newsDate").style.display = "";
          //タグを表示
          document.getElementClassName("newsCard <?php echo get_field('news_category')['value']; ?>").style.display = "";
          //内容を表示
          document.getElementClassName("newsCnt").style.display = ""; */

    /* //日付を非表示
    document.getElementById("newsDate").style.display = "none";
    //タグを非表示
    document.getElementById("newsCard2").style.display = "none"; 
    //内容を非表示
    document.getElementById("newsCnt").style.display = "none";
    //下線を非表示
    document.getElementById("newsCnt-Btline").style.display = "none"; */

    //  document.getElementById("parent").style.display = "none";

  } else if (selboxValue == "service") {
    
  oya.style.display = "none";

/*       //文字2を表示
      document.getElementClassName("newsDate").style.display = "";
      //input2を表示
      document.getElementClassName("newsCard <?php echo
      get_field('news_category')['value']; ?> ").style.display = ""; 
      //内容を表示
      document.getElementClassName("newsCnt").style.display = "";
      //文字1を非表示
      document.getElementClassName("txt1").style.display = "none";
      //input1を非表示
      document.getElementClassName("input1").style.display = "none";
      //内容を非表示
      document.getElementClassName("newsCnt").style.display = "none"; 
    }  */


    //以下はうまくいったコードサンプル
    /* function change10() {
      var selbox = document.getElementById("selbox2").value;
    
      if (selbox) {
        console.log('change');
      }
    };
     */

    //newscard2
    /* function kodomo(){
    
    let child = document.getElementById("kodomo");
    let oya = child.parentNode;
    }
    kodomo(); */

    // let child = document.getElementById("kodomo");
    //     // 親要素を取得
    // let oya = child.parentNode;

  
  }
  };
