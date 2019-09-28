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
    actions();
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

function breakup() {
    $breakupConvo = array('You deserve better, having a breakup is not the end of the world.',
    'You have to move on and build acceptance that your partner has left.',
    'Stop thinking too much about your partner',
    'You need to stay active and engaged with something productive.',
    'I think you should give your partner a second chance.',
    'I think you should take a break from the relationship.')

    $no = rand(0,6);
    echo $breakupConvo[$no] 
}

function health_worries() {
    $health = array('You should register as a member of a health spa or gym.',
    'Stop been afraid of needles as I am.',
    'Try to finish your medication instead of abandoning them.',
    'If you smoke, you have to stop as it is not good for you.',
    'Always go for lab tests to know what\'s wrong',
    'Try to have enough rest and sleep.',
    'Stop eating too much of junk food.');

    $no = rand(0,7);
    echo $health[$no] 
}

function self_confidence() {
    $confidence = array('Challenge bad thoughts about yourself by replacing them with good thoughts.',
    'Take care of yourself by eating well and exercising.',
    'Try to relax a lot more with anything that suits you.',
    'Set yourself realistic goals and keep track of your progress.',
    'Surround yourself with people with good vibes not bad energy.',
    'Accept yourself, your flaws and imperfections and learn to love them because they are what makes you unique.',
    'Don\'t be afraid to try new things.')

    $no = rand(0,7);
    echo $confidence[$no] 
}

function career() {
    $careerConv = array('Let\'s talk about your career.',
    'Tell me the career you\'re about to pursue.',
    'Tell me why you chose that career.',
    'You could become a programmer and make a special bot like me.',
    'Try completing college.',
    'Make sure you serve Nigeria by completing the mandatory NYSC.');

    $no = rand(0,6);
    echo $careerConv[$no] 
}

function food() {
    $foodConv = array('Tell me your favourite food.',
    'You should reduce the much you eat junk.',
    'I think you should follow a special diet.',
    'Tell me food(s) your city is famous for.',
    'You should try growing your own food.',
    'Eat more protein and drink more water.'
    'I think you\'re a good cook.'
    'Pick one food to represent you.')

    $no = rand(0,8);
    echo $foodConv[$no] 
}

function sport() {
    $sportConv = array('Tell me who your favorite professional athlete is.',
    'Try jogging to reduce your weight.',
    'Play any sport, it also improves bonding with friends.',
    'Tell me who your favorite football player is.',
    'Try being a fan of a football team.',
    'Set your schedule for exercises and stick to it.',
    'Tell me the exercises you like to do.',
    'To be serious about exercises, I suggest you should register at the gym.',
    'Try swimming, it\'s a great sport.')

    $no = rand(0,9);
    echo $sportConv[$no] 
}

?>