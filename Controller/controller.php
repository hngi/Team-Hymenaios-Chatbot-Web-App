<?php
    session_start();
    $path = '../Models/';

    foreach (glob($path .'*.php') as $filename)
{
    include_once $filename;
};

    if (isset($_POST["send"])) {
        $name = $_POST['name'];//the value of the input is saved as 'name'...
        response();}
    
    if (isset($_POST['happy'])) {
        feeling_good();
    }elseif (isset($_POST['sad'])) {
        Low_mood();
    }


    if (isset($_POST['health'])) {
        echo json_encode(["message" => "what about your health is bugging you"]); 
        health_options();
        if (condition) {
            # code...
        }elseif (condition) {
            # code...
        }elseif (condition) {
            # code...
        }elseif (condition) {
            # code...
        }elseif (condition) {
            # code...
        }
    }elseif (isset($_POST['work'])) {
        echo json_encode(["message" => "what about your work is bugging you"]); 
        work_issues();
        if (isset($_POST['boost_motivation_and_confidence'])) {
            boost_motivation_and_confidence();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                yes_no();
                if (isset($_POST['yes'])){
                    boost_motivation_and_confidence();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    boost_motivation_and_confidence();
                    }elseif(isset($_POST['no'])) {
                        actions();
                        }
                    }
        }elseif (isset($_POST['improve_focus'])) {
            improve_focus();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                if (isset($_POST['yes'])){
                    improve_focus();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
                    
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    improve_focus();
                }elseif(isset($_POST['no'])) {
                    actions();
                    }
                }
        }elseif (isset($_POST['challenge_negative_thoughts'])) {
            challenge_negative_thoughts();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                yes_no();
                if (isset($_POST['yes'])){
                    challenge_negative_thoughts();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    challenge_negative_thoughts();
                }elseif(isset($_POST['no'])) {
                    actions();
                }
            }
        }elseif (isset($_POST['cope_with_distress'])) {
            cope_with_distress();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                if (isset($_POST['yes'])){
                cope_with_distress();
                }elseif (isset($_POST['no'])){
                    actions();
                }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    cope_with_distress();
                    }elseif(isset($_POST['no'])) {
                        actions();
                    }
                }
        }elseif (isset($_POST['support'])) {
            echo json_encode(["message" => "welcome from your therap session",
            "message" => "what would you want me to do for you now"]); 
            therapy_options();
            if (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }
        }elseif (isset($_POST['self_confidence'])) {
            echo json_encode(["message" => "what is trying to bring you down"]); 
            self_confidence_options();
            if (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }elseif (condition) {
                # code...
            }
        }
    }elseif (isset($_POST['relationship'])) {
            echo json_encode(["message" => "Let nothing come in between your relationships"]); ;
            relationship_troubles();

            if (isset($_POST['relationship_problems'])) {
                 relationship_problems();
                helpful();
                yes_no();
                if (isset($_POST['yes'])){
                    another();
                    yes_no();
                    if (isset($_POST['yes'])){
                        relationship_problems();
                    }elseif (isset($_POST['no'])){
                        actions();
                    }
                }elseif(isset($_POST['no'])){
                    not_helpful();
                    yes_no();
                    if(isset($_POST['yes'])) {
                        relationship_troubles();
                    }elseif(isset($_POST['no'])) {
                        actions();
                    }
                }
            }elseif (isset($_POST['express_and_understand_better'])) {
                express_and_understand_better();
                helpful();
                yes_no();
                if (isset($_POST['yes'])){
                    another();
                    yes_no();
                    if (isset($_POST['yes'])){
                        express_and_understand_better();
                    }elseif (isset($_POST['no'])){
                        actions();
                        }
                }elseif(isset($_POST['no'])){
                    not_helpful();
                    yes_no();
                    if(isset($_POST['yes'])) {
                        express_and_understand_better();
                    }elseif(isset($_POST['no'])) {
                        actions();
                    }
                }
            }elseif (isset($_POST['difficult_conversations'])) {
                difficult_conversations();
                helpful();
                yes_no();
                if (isset($_POST['yes'])){
                    echo json_encode(['message1'=>'Glad i could help']);
                    actions();
                    }elseif(isset($_POST['no'])){
                    not_helpful();
                    yes_no();
                    if(isset($_POST['yes'])) {
                    echo json_encode(['message1'=>'Glad i could help']);
                    actions();
                    }elseif(isset($_POST['no'])) {
                        echo json_encode(['message1'=>"I'm sorry i could not be of help"]);
                        actions();
                        }
                    }
                }
            
            elseif (isset($_POST['assertive'])) {
                assertive();
                helpful();
                yes_no();
                if (isset($_POST['yes'])){
                    another();
                    yes_no();
                    if (isset($_POST['yes'])){
                        assertive();
                    }elseif (isset($_POST['no'])){
                        actions();
                        }
                }elseif(isset($_POST['no'])){
                    not_helpful();
                    yes_no();
                    if(isset($_POST['yes'])) {
                        assertive();
                    }elseif(isset($_POST['no'])) {
                        actions();
                    }
                }
            }elseif (isset($_POST['be_more_compassionate'])) {
                be_more_compassionate();
                helpful();
                yes_no();
                if (isset($_POST['yes'])){
                    another();
                    yes_no();
                    if (isset($_POST['yes'])){
                        be_more_compassionate();
                    }elseif (isset($_POST['no'])){
                        actions();
                    }
                }elseif(isset($_POST['no'])){
                    not_helpful();
                    yes_no();
                    if(isset($_POST['yes'])) {
                        be_more_compassionate();
                    }elseif(isset($_POST['no'])) {
                        actions();
                    }
                }
        }
    }elseif (isset($_POST['mooddy'])) {
        echo json_encode(["message1" => "I'm so sorry to hear that". $name,
        "message2" => "what could have possibly made you sad",
        "message3" => "I'd love to talk about it"]);
        moody_options();
        if (isset($_POST['nagative_thoughts'])) {
            negative_thoughts();
            helpful();
            if (isset($_POST['yes'])){
                another();
                yes_no();
                if (isset($_POST['yes'])){
                    heart_break_options();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    heart_break_options();
                }elseif(isset($_POST['no'])) {
                    actions();
                }
            }
        }elseif (isset($_POST['restore_sleep_patterns'])) {
            restore_sleep_patterns();
            helpful();
            if (isset($_POST['yes'])){
                echo json_encode(['message1'=>'Glad i could help']);
                actions();
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                echo json_encode(['message1'=>'Glad i could help']);
                actions();
                }elseif(isset($_POST['no'])) {
                    echo json_encode(['message1'=>"I'm sorry i could not be of help"]);
                    actions();
                    }
                }
        }elseif (isset($_POST['build_confidence'])) {
            build_confidence();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                yes_no();
                if (isset($_POST['yes'])){
                    build_confidence();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    build_confidence();
                }elseif(isset($_POST['no'])) {
                    actions();
                    }
                }
        }elseif (isset($_POST['problem_solve_effevtively'])) {
            problem_solve_effevtively();
            helpful();
            yes_no();
            if (isset($_POST['yes'])){
                another();
                yes_no();
                if (isset($_POST['yes'])){
                    problem_solve_effevtively();
                }elseif (isset($_POST['no'])){
                    actions();
                    }
            }elseif(isset($_POST['no'])){
                not_helpful();
                yes_no();
                if(isset($_POST['yes'])) {
                    problem_solve_effevtively();
                }elseif(isset($_POST['no'])) {
                    actions();
                    }
                }
        }
    }elseif (isset($_POST['tell_a_joke'])) {
        tell_a_joke();
        another();
        if (isset($_POST['yes'])){
            another();
            yes_no();
            if (isset($_POST['yes'])){
                tell_a_joke();
            }elseif (isset($_POST['no'])){
                actions();
            }
        }elseif(isset($_POST['no'])){
            not_helpful();
            yes_no();
            if(isset($_POST['yes'])) {
                tell_a_joke();
            }elseif(isset($_POST['no'])) {
                actions();
                }
            }
    } 

/*if (isset($_POST['yes'])){
    another();
    if (isset($_POST['yes'])){
        ();
    }elseif (isset($_POST['no'])){
        actions();
    }
}elseif(isset($_POST['no'])){
    not_helpful();
    yes_no();
    if(isset($_POST['yes'])) {
        ();
    }elseif(isset($_POST['no'])) {
        actions();
    }
}*/
    


    
          
    
    

?>