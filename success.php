<?php require_once './src/header.php'; ?>

<style>footer{margin-top: 0;}</style>
<div class="banner" style="display:flex;align-items:center;margin:0">
    <h1 class="titleSuccess">Your message has been sent successfully!<br>You will be redirected to the Contacts page automatically.</h1>
</div>

<?php 

header('Refresh: 10; url="../page.php?page=contact"');

function testForm($name, $tel, $email, $str)
    {
        if (preg_match("/^[\+]{1}[\d]{1,3}\([\d]{2,3}\)[\d]{5,7}$/", $tel)) {
            
            return true;
        }else{

            return false;
        }

        if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,11})$/i", $email)) {

            return true;
        }else{
    
            return false;
        }

        if (preg_match("/<[^<]+>/", $str) ) {
            $str = strip_tags($str);

            return true;
        }

        if (preg_match("/^[\s\S]{5,250}$/", $str) || preg_match("/^[\w]{5,250}$/i", $name)) {
            
            return true;
        } else{

            return false;
        }
    }

if (!testForm($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']) == false) {
    
        return true;
    } else{
        $new_url = '../page.php?page=contact';
        header('Location: '.$new_url, false);
    } 
    ?>