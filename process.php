<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["countryForm"] ?? "";
    $message = "";

    switch ($country) {
        case "U": $message = "Visa required for most applicants."; break;
        case "C": $message = "Visa required unless you have an eTA."; break;
        case "I": $message = "Visa required before travel."; break;
        case "UK": $message = "Visa depends on the duration of stay."; break;
        case "AUS": $message = "eVisa available for eligible travelers."; break;
        default: $message = "Invalid country selection."; 
    }
    
    echo "<h2>Visa Check Result</h2>";
    echo "<p>$message</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
