<?php

/* Question 1 : Write a PHP script to display names and the salaries amounts, within a table. ou should use `echo ` to generate your table. */
//////////////////////// Your Code Here /////////////////////
// echo "Name";
echo "<table><tr> <td> Salary for mr.A : </td><td> $2000</td> </tr> </table>
            <tr><td> Salary for mr.B : </td></tr> <td>$7000</td> </tr>
" ;




/*Question 2 : Write a PHP script which displays the capital and country name from the below array $c. as unordered list after sorting the array list by countries names  */
//////////////////////// Your Code Here /////////////////////

$countries = array( "Italy"=>"Rome",
              "Luxembourg"=>"Luxembourg",
               "Belgium"=> "Brussels",
               "Denmark"=>"Copenhagen",
               "Finland"=>"Helsinki",
               "France" => "Paris",
               "Slovakia"=>"Bratislava" ) ;
sort($countries);
    // print_r($countries);
for ($i=0; $i < sizeof($countries) ; $i++) { 
// print_r ($countries);
// echo array_keys($countries)[$i];
echo "<ul>". $countries[array_keys($countries)[$i]] ." ". array_values($countries)[$i] ."</ul>";
}

/*Question 3 : Write a script to build the following stars pattern, using a nested for loop.

*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*

*/
$counter = 0;
for ($i=0; $i < 10; $i++) { 
    echo "*<br>";
    for ($j=0; $j <= i; $j++) { 
        echo "*";
     
      
    }
}

/*Question 4 : Write a PHP script to calculate the difference between two dates.
Input : 1981-11-04, 2013-09-04
Output : 31 years, 10 months, 11 days




/*Question 5 : Create a simple HTML form that accept the user name after submitting display the name using PHP echo statement under the form. */



$first_date = date(1981-11-04);
// $second_date  = date(2013-09-04);

echo "<form>username: <input></input> <br/> password: <input></input><br/><button>submit</button></form> "

?>