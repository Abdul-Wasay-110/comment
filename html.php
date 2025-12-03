<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h1>Day of the Week</h1>
    
    <form method="post">
        Enter a day of the week: <input type="text" name="day">
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Get user input for the day
        $day = strtolower($_POST['day']); // Convert to lowercase for case-insensitive checking
        $message = ''; // Initialize the message variable

        // Use a switch statement to check the day
        switch ($day) {
            case 'monday':
            case 'tuesday':
            case 'wednesday':
            case 'thursday':
                $message = 'It\'s a weekday. Time to work!';
                break;
            case 'friday':
                $message = 'It\'s Friday! It\'s the end of the workday.'; // Assuming a message like this from the image
                break;
            case 'saturday':
            case 'sunday':
                $message = 'It\'s the weekend.';
                break;
            default:
                $message = 'Invalid input. Please enter a valid day.';
        }
        
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>