<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ['Pizza', 
         'Poutine',  
         'Pulled Pork',
        'Cheese Cake'];

/*
Print every array element in a new line.
*/

echo "<pre>";
print_r($food);
echo "</pre>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
*/

echo "<ul>
      <li>{$food[0]}</li>
      <li>{$food[1]}</li>
      <li>{$food[2]}</li>
      <li>{$food[3]}</li>
    </ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [ 'Pizza' => 'main course', 
         'Poutine' => 'snack',  
         'Pulled Pork' => 'sandwich',
              'Cheese Cake' => 'dessert'];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach ($food_assoc as $key => $value) {
    echo "{$key} | {$value} <br>";      
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/


$food_assoc = [
        "Pizza" => [
         "type" => "main course",
         "origin" => "Italy"],

        "Poutine" => [
         "type" => "snack",
         "origin" => "Canada"],

        "Pulled Pork" => [
         "type" => "sandwich",
         "origin" => "America"],

        "Cheese Cake" => [
         "type" => "dessert",
         "origin" => "Greece"]
    ];


//echo $pizza;

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

//repeat for each one.
echo "Pizza | {$food_assoc["Pizza"]["type"]} | {$food_assoc["Pizza"]["origin"]}";
echo "<br>";
echo "Poutine | {$food_assoc["Poutine"]["type"]} | {$food_assoc["Poutine"]["origin"]}";
echo "<br>";
echo "Pulled Pork | {$food_assoc["Pulled Pork"]["type"]} | {$food_assoc["Pulled Pork"]["origin"]}";
echo "<br>";
echo "Cheese Cake | {$food_assoc["Cheese Cake"]["type"]} | {$food_assoc["Cheese Cake"]["origin"]}";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
*/  


echo "<table>
  <tr>
    <th>Food</th>
    <th>Type</th>
    <th>Origin</th>
  </tr>
  <tr>
    <td>Pizza</td>
    <td>{$food_assoc["Pizza"]["type"]}</td>
    <td>{$food_assoc["Pizza"]["origin"]}</td>
  </tr>
  <tr>
    <td>Poutine</td>
    <td>{$food_assoc["Poutine"]["type"]}</td>
    <td>{$food_assoc["Poutine"]["origin"]}</td>
  </tr>
  <tr>
    <td>Pulled Pork</td>
    <td>{$food_assoc["Pulled Pork"]["type"]}</td>
    <td>{$food_assoc["Pulled Pork"]["origin"]}</td>
  </tr>
  <tr>
    <td>Cheese Cake</td>
    <td>{$food_assoc["Cheese Cake"]["type"]}</td>
    <td>{$food_assoc["Cheese Cake"]["origin"]}</td>
  </tr>
</table>";


?>