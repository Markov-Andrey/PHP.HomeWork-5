<?php 
require_once './src/pagesData.php'; 
$htmlTitle = $pagesData[$_GET['page']]['h1'];
require_once './src/header.php'; 
?>

<?php 
if(!empty($pagesData) && $_GET['page'] == 'about'):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section>
        <div>
            <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
            <p><?php echo $pagesData[$_GET['page']]['text1']; ?></p>
        </div>
        <div>
            <p style="margin-right: 70px;"><?php echo $pagesData[$_GET['page']]['text2']; ?></p>
            <img src="<?php echo $pagesData[$_GET['page']]['img2']; ?>" alt="" style="margin-right: 0;">
        </div>
    </section>
    
<?php
break;
    endforeach;
endif;

if(!empty($pagesData) && ($_GET['page'] == 'blog' || $_GET['page'] == 'portfolio')):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section class="main">
        <div class="pageBlock content-block">
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title1']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text1']; ?></p>
            </div>
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title2']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text2']; ?></p>
            </div>
            <div class="<?php echo $_GET['page'] ?>">
                <img src="<?php echo $pagesData[$_GET['page']]['img1']; ?>" alt="">
                <h4 class="pageBlockTitle"><?php echo $pagesData[$_GET['page']]['title3']; ?></h4>
                <p class="pageText text-content"><?php echo $pagesData[$_GET['page']]['text3']; ?></p>
            </div>
        </div>        
    </section>
    
<?php
break;
    endforeach;
endif;

if(!empty($pagesData) && $_GET['page'] == 'contact'):
    foreach ($pagesData as $page => $content): ?>
    <div class="pagesBanner">
        <h1 class="pagesTitle"><?php echo $pagesData[$_GET['page']]['h1']; ?></h1>
    </div>
    <section class="main">
        <div class="pageBlock content-block">
            <div class="<?php echo $_GET['page'] ?>">
                <form action="success.php" method="POST">
                    <h4><?php echo $pagesData[$_GET['page']]['formName']; ?></h4>
                    <p><input type="text" name="name" placeholder="Enter your name*" required></p>
                    <p><input type="tel" name="phone" placeholder="+375(33)1234567*" required></p>
                    <p><input type="email" name="email" placeholder="info@gmail.com*" required></p>
                    <p><textarea name="message" id="" cols="30" rows="10" placeholder="Message..."></textarea></p>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>        
    </section>

<?php
break;
    endforeach;
endif;
?>