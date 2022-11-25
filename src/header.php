<?php 
  require_once 'pagesData.php';
  //конструктор меню
  $addMenu = function() use($arrMenu)
  {
    foreach ($arrMenu as $title => $link){
      echo"
            <li>
              <a href=".$link.">
                ".$title."
              </a>
            </li>
      ";
    }
  };
?>

<!DOCTYPE html>
<html lang='ru'>

<head>
  <meta charset='utf-8'>
  <title><? if($htmlTitle) echo "$htmlTitle"; ?></title>
  <link rel="shortcut icon" href="./icon/markov-logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./style/style.css" />
</head>
<body>
  <header>
    <div>
      <p><?php echo $siteName?></p>
    </div>
    <div>
        <ul>
            <?php $addMenu()?>
        </ul>
    </div>
  </header>