<!-- Beberapa contoh fungsi named argument -->

<!-- Named Argument 1 -->
<?php
// function funTest($box_one, $box_two, $box_three = 0, $box_four)
// {
//     echo $box_one + $box_two * $box_three - $box_four;
// }

// return funTest(box_four: 6, box_one: 1, box_two: 3);


// Named Argument 2
function funTest($box_one = "", $box_two = "Ayam", $box_three = "", $box_four = "Sapi")
{
    echo $box_one . '' . $box_two  . '' . $box_three  . '' . $box_four;
}

return funTest(box_three: 'Kerbau', box_one: 'Ikan');
