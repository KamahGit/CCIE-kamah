<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 9/21/2018
 * Time: 7:52 PM
 */

$name="Bruce";
$course="Software Development Training";
$school="Cytonn College of Innovation And Entrepreneurship";

/**
 * @param $name
 */
function announce($name,$course,$school){
    var_dump($name);
    echo "Studies $course";
    echo "At $school";
}
