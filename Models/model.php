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
    $breakupConvo = array('What does it feel like to ave a broken heart?',
    'Did your partner deserve you?',
    'You have to move on.',
    'Stop thinking too much about your partner',
    'You need to hangout more often',
    'If your partner asks for a second chance, would you be willing to give a chance?',
    'Would you prefer to take a break in the relationship?')
}

function health() {
    $healthConvo = array('Are you a member of a health spa or gym?',
    'Are you afraid of needles? I am.'
    'Do you think you need to lose weight?'
    'How often do you catch a cold?',
    'Do you smoke?',
    'What is your blood type?',
    'Do you sleep well?',
    'How much of junk food do you eat?');
}

function self_confidence() {
    $confidenceConvo = array('Challenge bad thoughts about yourself by replacing them with good thoughts.',
    'Take care of yourself by eating well and exercising.',
    'Try to relax a lot more with anything that suits you.',
    'Set yourself realistic goals and keep track of your progress.',
    'Surround yourself with people with good vibes not bad energy.',
    'Accept yourself, your flaws and imperfections and learn to love them because you are unique.',
    'Try new things; check youtube for some tutorials.')
}

function career() {
    $careerConv = array('Let\'s talk about your career.',
    'May I know your choice of career?',
    'What subject or course are you good at?',
    'You could become a programmer and make a special bot like me.',
    'Have you completed college?',
    'Have you served Nigeria in the mandatory NYSC?');
}

function food() {
    $foodConv = array('What is your favorite food?',
    'How often do you eat junk?',
    'Do you follow a special diet?',
    'Is your city famous for any foods?',
    'Have you tried growing your own food?',
    'Are you a vegetarian?'
    'Are you a good cook?'
    'Pick one food to represent you.')
}

function sport() {
    $sportConv = array('Do you play any sports?',
    'Who is your favorite professional athlete?',
    'What is the most expensive sport?',
    'Do you ever watch football games?',
    'Who is your favorite football player?',
    'Do you have a favorite football team?',
    'Do you do exercises? How often do you do exercises?',
    'What exercises do you like to do?',
    'Do you like going to the gym?',
    'Can you swim?',
    'Have you taken swimming lessons?')
}

?>