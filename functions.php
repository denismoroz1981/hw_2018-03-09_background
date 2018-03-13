<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 13.03.18
 * Time: 21:03
 */

function colorForm ()
{
    $colors = ["Red","Yellow","Blue"];

    $htmlForm=<<<EOG
    <form action="" method = "post">
        <select name="bgcolor">
        
EOG;
    foreach ($colors as $col) {
        $htmlForm.='<option>'.print_r($col,1).'</option.>';

    }
    $htmlForm.=<<<EOG
    </select>
    <input type="Submit" value="Set color">
    </form>
EOG;

    echo $htmlForm;


}


















