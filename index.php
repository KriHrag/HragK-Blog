<html>
    <head>  
        <meta charset="UTF-8">
         <link type="text/css" rel="stylesheet" href="css/css.css"> 
        <title></title>
    </head>
 <?php
require_once(__DIR__ . "/view/header.php");
require_once(__DIR__ . "/view/navigation.php");
require_once(__DIR__ . "/controller/create-db.php");    
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/read-posts.php");
?>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script>$('document').ready(function() {

    $('.what').css('background-color', 'red');

    $('div:last p:nth-child(3)').css('background-color', 'black');

    $('p:last').css('color', 'blue');

    $('p:gt(1)').css('border-style', 'solid');

    $('p:first').css({'background-color': 'black', 'color': 'white'});

    $('h1').bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);

    $('h1').bind('click', mouseClick);

    $('replaceWText').bind('click', replaceWText);

    $('#randPara').bind('click', addAPara);

    $('#removePara').bind('click', removeAPara);

    $('#show').css('visbility', 'hidden');

    $('#hide').bind('click', hideThePage);

    $('#show').bind('click', showThePage);

    $('.what').css('background-color', 'red');

    $('#superHumans').accordion({header: "IDK"});
});


function hideThePage() {
    $('#show').show('fold', {}, 2500);
    $('div').hide('puff', {}, 2500);
}

//this is the button to hide the page when i click oon the specififc word

function showThePage() {
    $('div').show('fold', {}, 2500);
    $('#show').hide('puff', {}, 2500);
}
//this  is the button to show the page when i click on the specific word

function removeAPara() {
    $('#randPara p:last').remove();
}

function addAPara() {
    $('#randPara').append('So?!');
}

function replaceWText() {
    $('#replaceWText').text('Hello');
}

function mouseOverMe() {
    $('h1').html('G4M3R 4L3RT');
}

function mouseOutMe() {
    $('h1').html('Click Here And?!');
}

function mouseClick() {

    $('p').html('DO U LIKE IT?');
}</script>