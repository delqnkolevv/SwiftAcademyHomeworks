<!DOCTYPE html>
<html>
<body>
      <form action="" method="post">
            Place your card here: <input type="text" name="card" value="" />
            <button type="submit">See results</button>
        </form>
 
<?php
$card ='';
if (isset($_POST['card'])) {
    $card = $_POST['card'];
}



switch ($card){
    case "J":
        echo "Yes";
        break;
    case "Q":
        echo "Yes";
        break;
    case "K":
        echo "Yes";
        break;
    case "A":
        echo "Yes";
        break;
    case "10":
        echo "Yes";
        break;
    case "9":
        echo "Yes";
        break;
    case "8":
        echo "Yes";
        break;
    case "7":
        echo "Yes";
        break;
    case "6":
        echo "Yes";
        break;
    case "5":
        echo "Yes";
        break;
    case "4":
        echo "Yes";
        break;
    case "3":
        echo "Yes";
        break;
    case "2":
        echo "Yes";
        break;
    case '':
	echo "";
	break;
	
    default:
        echo "No!";
		break;
}
?>

  
</body>
</html>