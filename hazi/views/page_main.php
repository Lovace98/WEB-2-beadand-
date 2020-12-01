<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Fiktív cég</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
        
        <script type="text/javascript">
            function dobozKiBe() {
      var id  = $(this).attr("id");
      var ssz = id.substr(3);
      if ($("#torzs" + ssz).css("display") == "none") {
        $("#torzs" + ssz).css("display", "block");
        $(this).attr({
          src: "images/block-close.gif",
          title: "részletek elrejtése"
        });
      } else {
        $("#torzs" + ssz).css("display", "none");
        $(this).attr({
          src: "images/block-open.gif",
          title: "részletek megjelenítése"
        });
      }
    }
    $(document).ready(function() {
      $(".doboztorzs").css("display", "none");
      $(".kep").attr({
        src: "images/block-open.gif",
        title: "részletek megjelenítése"
      }).css("cursor", "pointer");
      $(".kep").click(dobozKiBe);
    });
        </script>
    </head>
    
    <body>
        <div class="wrapper">
        <header>
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">Fiktív cég</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <div class="main">
        
        <div class="content">
        
            <?php if($viewData['render']) include($viewData['render']); ?>
        
        </div>
        </div>
        <footer>&copy; 2020 Lovász Ádám</footer>
        </div>
    </body>
</html>
