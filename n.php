<!DOCTYPE html>
<html>
<head>
    <title>Meal Selector</title>
</head>
<body>
    <h1>Meal Selector</h1>
    <form method="post">
        <label for="mealCategory">Select a meal category:</label>
        <select name="mealCategory" id="mealCategory">
            <option value="category" selected hidden>Select category</option>
             <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>\
            <option value="dinner">Dinner</option>
        </select>

        <label for="mealChoice">Select a meal:</label>
        <select name="mealChoice" id="mealChoice">
            <option value="category" selected hidden>Select category</option>
            <option value="cereal">Slice</option>
            <option value="omelette">Omelette</option>
            <option value="sandwich">Sandwich</option>
            <option value="salad">Biryani</option>
            <option value="pasta">Pasta</option>
            <option value="steak">Pizza</option>
        </select>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mealCategory = $_POST['mealCategory'];
        $mealChoice = $_POST['mealChoice'];

        switch ($mealCategory) {
            case 'breakfast':
                switch ($mealChoice) {
                    case 'Slice':
                        $message = "Enjoy your Slice for breakfast.";
                        break;
                case 'Omelette':
                        $message = "Enjoy your Omelette for breakfast.";
                        break;
                  default:
                          $message = 'Please select a valid breakfast option.';
                           break;
                          
              
                }
                break;
                  case 'lunch':
                switch ($mealChoice) {
                    case 'Sandwich':
                        $message = "Enjoy your sandwich for lunch.";
                        break;
                    case 'Biryani':
                        $message = "Enjoy your biryani for lunch.";
                        break;
                  default:
                          $message = 'Please select a valid lunch option.';
                          
                          
              
                }
                break;
                  case 'dinner':
                switch ($mealChoice) {
                    case 'Pasta':
                        $message = "Enjoy your pasta for dinner.";
                        break;
                    case 'Pizza':
                        $message = "Enjoy your pizza for dinner.";
                        break;
                    }
                  default:
                          $message = 'Please select a valid dinner option.';
                         break;
                          
              
                }
              


        

      
            echo "<p>$message</p>";
        }
    
    ?>
</body>
</html>