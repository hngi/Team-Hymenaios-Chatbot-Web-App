<?php


function actions(){
    echo json_encode(["message" => "Below are a list of what i can talk about",
    "messsage2"=>"Tell a Joke \n",
    "message3" => "Talk about health worries",
    "message4" => "Talk about Health issues",
    "message5" => "Talk about work troubles",
    "message6" => "Post therapy Support",
    "message7" => "Build self Confidence",
    "message8" => "Relationshipp Issues",
    "message9" => "Dealing with Heart Breaks",
    "message10" => "Monitor your money Flow",
    ]); 
}

function Bisola(){
    echo json_encode(["message1" => "Hi there I'm Bisola",
    "message2" =>"I'm here to help you through troubling situations",
    "message3" =>  "what's your first name",
    ]); 
}

function Trevor(){
    echo json_encode(["message" => "Hi there I'm Trevor",
    "message2" => "I'm here to help you through troubling situations",
    "message3" => "what's your first name "
    ]);
}

function response( $name ) {
    echo json_encode(["message" => 'Hello'. $name ,
    "message2" => 'How are you felling today?']); 
}

function feeling_good(){
    echo json_encode(["message" => "Great",
    "message2" => 'What would you like to talk about today'
    ]);
}


function money_problems(){
    echo json_encode(["message" => "the website of budget app"]); 
}



function helpful(){
    json_encode(['message'=> 'Was that helpful']);
}

function another(){
    json_encode(['message'=>'Would you like another tip']);
}

function not_helpful(){
    json_encode(['message1'=>"I'm sorry to hear that". $name,
    "message2"=> 'Would you like another tip']);
}

function yes_no(){
    echo json_encode(['message1'=>'yes',
    'message2'=> 'no']);
}
//function low_mood(){}
//function low_mood(){}
//function low_mood(){}
//function low_mood(){}


//Relationship Troubles
function relationship_troubles(){
    echo json_encode(['message1'=> 'relationship_problems',
    'message2' => 'express_and_understand_better',
    'message3'=> 'difficult_conversations',
    'message_4'=>'assertive',
    'message5' => 'be_more_compassionate']);
}

function relationship_problems(){
    $rissues = array("Be consistent",
    "Be on Time",
    "Don't lie -- not even little white lies to your partner or to others.",
    "Be fair, even in an argument",
    "Be sensitive to the other's feelings.",
    "Call when you say you will.",
    "Call to say you'll be home late.");

    $no = rand(0,6);
    echo json_encode(["message" => $rissues[$no]]);  ;
}
function express_and_understand_better(){
    $better = array("Take time to get to know your partner better",
    "Be aware of your own feelings and motivations.",
    "Never impose your own ideals and beliefs",
    "Allow your partner to live a life outside of your relationship.",
    "Respect your partner's needs as a social being.");

    $no = rand(0,4);
    echo json_encode(["message" => $better[$no]]);  ;
}
function difficult_conversations(){
    $conversations = array(
    "Pick a good time.",
    "Avoid making accusations.",
    "Ask for the time that you need before you stsart the conversation",
    "Give them time to respond",
    "Stick to the topic at hand");

    for ($i=0; $i < count($conversations) ; $i++) { 
        echo json_encode($conversations[$i]);
}
}
function assertive(){
    $assert = array("Start small",
    "Believe your opinions about the relationship are valid",
    "Let go of any residual guilt.",
    "Phrase your statements in the right way.",
    "Know when it’s okay to stay quiet.",
    "Avoid being too emotional.");

    $no = rand(0,6);
    echo json_encode(["message" => $assert[$no]]);  ;

}
function be_more_compassionate(){
    $compassion = array("Put yourself in your partner's shoes",
    "Think before you speak",
    "Don't be self-centered",
    "Make it a habit to ask questions.",
    "Accept and understand your differences",
    "Appreciate the little things.",
    "Always choose kindness",
    "Choose love over hate." )   ;

    $no = rand(0,7);
    echo json_encode(["message" => $compassion[$no]]);  
}

//Work_issues

function work_issues(){
    json_encode(['message1'=> 'improve_focus',
    'message2'=> 'challenge_negative_thoughts',
    'message3' => 'cope_with_distress']);
}

function boost_motivation_and_confidence(){
    build_confidence();
    }
function improve_focus(){
     $focus = array("Start by Assessing Your Mental Focus",
    "Eliminate Distraction",
    "Focus on One Thing at a Time",
    "Live in the Moment",
    "Practice Mindfulness",
    "Try Taking a Short Break",
    "Keep Practicing to Strengthen Your Focus",
    "Use nootropic herbs.",
    "Set Small Daily Goals");

    $no = rand(0,15);
    echo json_encode(["message" => $focus[$no]]);  
}
function challenge_negative_thoughts(){
     negative_thoughts();
}
function cope_with_distress(){
    $distress = array('Identify your needs.',
    "Focus on what you want — not on what you don’t.",
    "Honor your needs.",
    "Get moving",
    " Develop an inner nurturing voice.",);

    $no = rand(0,15);
    echo json_encode(["message" => $distress[$no]]);  
}

function Low_mood(){
    json_encode(['message1'=>'negative_thoughts',
    'message2' => 'restore_sleep_patterns',
    'messaage3' => 'build_confidence',
    'message4'=> 'problem_solve_effevtively']);
}

function negative_thoughts(){
    $solution = array('Recognize thought distortions.',
    'Challenge negative thoughts',
    ' Take a break from negative thoughts',
    'Release judgment.',
    ' Practice gratitude',
    'Focus on your strengths',
    'Seek out professional support',);

    $no = rand(0,7);
    echo json_encode($solution[$no]) ;
    }

function restore_sleep_patterns(){
    $sleep = array('create a relaxing night time rountine',
    'Maintain a strict and consistent sleep schedule.',
    "Don't vary by more than one hour on weekends.",
    "Don't take naps longer than 20-30 minutes.",
    "Limit caffeine after lunch.".
    "Give yourself enough time for adequate sleep.",
    "Get a plan",
    "And most imortantly, Stick with your plan.");

    for ($i=0; $i < count($sleep) ; $i++) { 
        echo json_encode($sleep[$i]);
    }
    }

function build_confidence(){
    $build = array('Get Things Done',
    "Monitor Your Progress",
    " Do The Right Thing",
    "Exercise",
    "Be Fearless",
    "Stand u for Yourself",
    "Follow Through",
    "Think Long-Term",
    "Don't Care Whaat Others Think",
    "Do More Of What Makes You Happy");

    $no = rand(0,15);
    echo json_encode($build[$no]) ;
    }

function problem_solve_effevtively(){
    $solve = array('Identify the issues. Be clear about what the problem is',
    "Understand everyone's interests",
    "List the possible solutions (options)",
    "Evaluate the options",
    "Select an option or options.",
    "Document the agreement(s)",
    "Agree on contingencies, monitoring, and evaluation.",);

    $no = rand(0,15);
    echo json_encode($solve[$no]) ;
}

//Jokes
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
    echo json_encode($jokes[$no]) ;
}

?>

