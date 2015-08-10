<? php function to_title_case( $string ) {
     /* Words that should be entirely lower-case */
     $articles_conjunctions_prepositions = array(
          'a','an','the',
          'and','but','or','nor',
          'if','then','else','when',
          'at','by','from','for','in',
          'off','on','out','over','to','into','with'
     );
     /* Words that should be entirely upper-case (need to be lower-case in this list!) */
     $acronyms_and_such = array(
         'asap', 'unhcr', 'wpse', 'wtf'
     );
     /* split title string into array of words */
     $words = explode( ' ', mb_strtolower( $string ) );
     /* iterate over words */
     foreach ( $words as $position => $word ) {
         /* re-capitalize acronyms */
         if( in_array( $word, $acronyms_and_such ) ) {
             $words[$position] = mb_strtoupper( $word );
         /* capitalize first letter of all other words, if... */
         } elseif (
             /* ...first word of the title string... */
             0 === $position ||
             /* ...or not in above lower-case list*/
             ! in_array( $word, $articles_conjunctions_prepositions )
         ) {
             $words[$position] = ucwords( $word );
         }
     }
     /* re-combine word array */
     $string = implode( ' ', $words );
     /* return title string in title case */
     return $string;
}

?>
