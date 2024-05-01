<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstTime = $_POST["first_time"];
    $recommend = $_POST["recommend"];
    $feedback = $_POST["feedback"];
    $file = "feedback.txt";
    $content = "First time user: $firstTime\nRecommendation: $recommend\nFeedback: $feedback\n\n";

    if ($handle = fopen($file, "a")) {
        fwrite($handle, $content);
        fclose($handle);
        echo "Feedback saved successfully!";
    } else {
        echo "Error writing to file.";
    }
}
?>