<?php
require_once 'vendor/autoload.php';

$result =[];
$result['word_length'] = '';
$result['string_length'] = '';



//require_once 'app/classes/FindCharecter.php';
//require_once 'app/classes/Practice.php';
//require_once 'app/classes/SecondPractice.php';


use App\classes\FindCharecter;
use App\classes\Practice;
use App\classes\SecondPractice;


Practice::addition();
echo '<br/>';
SecondPractice::getWord();


  //standard practice object toirir jnno

//require_once 'app/classes/FindCharecter.php';
//use App\classes\FindCharecter;
if(isset($_POST['btn'])){
$result = $findCharecter = FindCharecter::wordCharecterCount($_POST);


    //avabeo object kora jay

//    if(isset($_POST['btn'])){
//    $findCharecter = new App\classes\FindCharecter();
//    $result = $findCharecter->wordCharecterCount($_POST);
//    //$givenString = strlen( $_POST['given_string']);
}

?>

<form action="" method="post">

    <table>
        <tr>
            <th>Enter your string</th>
            <td><input type="text" name="given_string" size="50"></td>
        </tr>

        <tr>
            <th>Total number of word</th>
            <td><input type="text" name="total_word" size="50"
                       value="<?php echo $result['string_length']; ?>">
            </td>
        </tr>

        <tr>
            <th>Total number of charecter</th>
            <td><input type="text" name="total_charecter" size="50"
                       value="<?php echo $result['word_length']; ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="Submit" ></td>
        </tr>

    </table>

</form>
