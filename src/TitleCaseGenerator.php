<?php
    class TitleCaseGenerator
    {
//Function to correctly titlecase inputs
        function makeTitleCase($input_title)
        {
//breaks str into array and turns text into lowercase
            $input_array_of_words = explode(" ", mb_strtolower( $input_title ));
            $output_titlecased = array();

            $excluded_words = array('a', 'an', 'and', 'at', 'but', 'by', 'else', 'for', 'from', 'if', 'in', 'into', 'nor', 'of', 'off', 'on', 'or', 'out', 'over', 'the', 'then', 'to', 'when', 'with');
//for each word in the array uppercase the first leter, except for excluded words
            foreach ( $input_array_of_words as $position => $indi ) {
                if( !$position or !in_array($indi, $excluded_words))
                $input_array_of_words[$position] = ucfirst($indi);


            }
            $newtitle = implode(" ", $input_array_of_words);
            return $newtitle;
        }

    }
?>
