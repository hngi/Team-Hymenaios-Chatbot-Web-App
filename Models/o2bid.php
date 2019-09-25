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


function travels() {
    $travelConv = array('Let\'s talk about your choice of destination.',
    'where do you wish to travel next?',
    'Do you want to travel local or ocerseas?',  
    'Do you have a visa already?',
    'Have you ever been out of the country before?',
    'What kind of trip do you want? Relaxing or educational, adventure or culture?',
    'Who do you want to travel with?',
    'Do you know how to get from point A to point B at your destination?',
    'What is the lenght of your trip?',
    'How much do you budget for the trip?',
    'Where are you doing to stay?',
    'Have youj factor in language barrier?',
    'Will you be able to eat their food at your destination',
    'Do you know best time to travel?', 
    'Do you have good travel insurance?',
    'Do you know what to do if you loss your passport?', 
    'You will need a visa to travel to your choice of destination',
    'For choice of airline, i will advice you fly with the country local carrier'
    );


}
function books() {
    $booksConv = array(' Who is your best Nigeria author?',
    "What's the first book you ever remember reading?",
    'Did someone read to you when you were a child?',
    "Who's your all-time favorite book character?",
    "Who's your favorite author of all time? Your favorite book by them?", 
    'Has a book ever changed your life?',  
    'What genres do you love?',
    'Are there any genres you dislike?',
    'What author (who is still living) would you dearly love to meet?',
    'Have you ever met a (famous or semi-famous) author face to face? Where?',
    'Do you prefer paperbacks or ebooks? Why?',
    'Have you ever read a self-published book?',
    'What book or series do you hope and pray will be turned into a movie or TV show one day?',
    'Do you think there are any movie adaptations out there that were actually better than the original?',
    'Has a book you like ever been turned into a movie or TV series, and you hated that adaptation?',
    "What's more important to you: prose or story?",
    'What attracts you to a book? The cover? Blurb? Recommendation from others?',
    'Have you read any of the old classics? What did you think of them?', 
    "Has a book ever scared you or given you nightmares?",
    "Are there any books that are really popular but you dislike?",
    'Are there any books that are considered terrible but are your secret pleasure?',
    "What's your favorite book cover?", 
    'Do you prefer old books or new ones?', 
    'What was your favorite book when you were a child?',
    'How many books do you read a month?',
    'Would you like more time to read books?', 
    'Do you like to write reviews on Amazon or Goodreads?',
    'In general, do you think books are better or worse now than they used to be?',
    'Where do you usually discover new books? Physical bookstores? Online? Social media?',
    'Have you ever joined a book club?',
    'Where do you like to read? At home on the couch? On the train? In bed?',
    'What deceased author would you have liked to meet?',
    'Think about your favorite genre. To you, which author is the master of that genre?',
    'Do you judge a book by its cover? Would a shoddy cover put you off?',
    'Do certain tropes attract you? For example, orphans, love triangles, anti-heroes?',
    "Are there any books you haven't been able to finish? Why not?",
    'What are some of your favorite quotes or scenes from a book?',
    'Did you read books in school? Can you remember which ones?',
    'Are there any books you could read over and over again and never get bored of?',
    "What's the last book you read?",
    "What's the last book you bought? Did you buy it online or at a store? Ebook or paperback?",
    'Do you like to display your books on a bookshelf or keep them in a virtual library?',
    'Do you prefer flash fiction, short stories, novellas, or novels?',
    'What book can you recommend to me?',
    'When did you last visit a library?',
    'Have you ever had a crush on a book character?',
    'Has a book ever made you laugh out loud?',
    'Has a book ever made you cry?',
    "Are you generally good at guessing twists or being able to see what's coming? Have any stories genuinely shocked you?",
    "What's your favorite drink, snack, or beverage to have beside you while you're reading?",
    'What book will you read next?');

}

function movies() {
    $moviesConv = array('which movie did you watch of recent?',
    'How did the movie make you feel?',
    'What aspect of the movie did you most engage with? What will you remember', 
    'What does it make you think about?',
    'Would you watch it again? Why/why not?',
    'How would a second viewing be different? What would you focus on?',
    'How would different people view this film differently (dependent on gender, age, ethnic',
    'background, worldview, etc)?',
    'How popular is this movie? How well did it do at the box office?',
    'How influential is it? Has it been referenced in later films, television programmes, etc.?',
    'What kind of buzz has it created? What media exposure has the film received? What has the critical response',
    'Which movie do you plan to watch next?');



}
?>
