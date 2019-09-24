<?php

date_default_timezone_set('Africa/Lagos');

function actions(){
    echo "Below are a list of what i can do' \n 
    Tell a Joke \n";
}

function welcome() {
    $dat = date("a");
    if ($dat=='AM') {
        echo('Good morning');
        echo 'you are welcome';
        actions();
    }else {
        echo('Good afternoon');
        echo 'you are welcome';
        echo 'what is your name';
    }
    
}

function response( $name ) {
    echo ('Hello'. $name);
    echo 'What can i do for you today';
    actions() ;
    
}

function clear() {

}

function emoticons() {
    //$emoti = array('' => , );
}

function tell_me_a_joke() {
    $jokes = array('Today at the bank, an old lady asked me to help check her balance. So I pushed her over.',
    "I bought some shoes from a drug dealer. I don't know what he laced them with, but I've been tripping all day.",
'I told my girlfriend she drew her eyebrows too high. She seemed surprised.' ,
'My dog used to chase people on a bike a lot. It got so bad, finally I had to take his bike away.', 
'Why is Peter Pan always flying? He neverlands.', 
"The other day, my wife asked me to pass her lipstick but I accidentally passed her a glue stick. She still isn't talking to me.",
'What do you call a guy with a rubber toe? Roberto.', 
"I couldn't figure out why the baseball kept getting larger. Then it hit me.",
'I ate a clock yesterday, it was very time consuming.',
'I know a lot of jokes about unemployed people but none of them work.',
'Did you hear about the italian chef that died? He pasta way.',
'Parallel lines have so much in common. It’s a shame they’ll never meet.',
'Where do you find a cow with no legs? Right where you left it.' ,
'How do crazy people go through the forest? They take the physco path.');

$no = rand(0,15);
echo $jokes[$no] ;
}

function error(){
    echo ("sorry I don't understand what you said");
    actions();
}

?>