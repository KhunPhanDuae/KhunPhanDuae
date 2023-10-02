<?php
function handleRequest() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // The form was submitted using the "POST" method.
        // Get data from the form
        $data = $_POST["data"];

        // Specify the file path where you want to write the data
        $file = "data.txt";

        // Write the data to the file
        file_put_contents($file, $data);

        // Redirect or display a confirmation message
        header("Location: success.php");
        exit();
    } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
        // The request is a "GET" request.
        // You can handle GET requests differently if needed.
        // For example, read data from a file and display it.
        $file = "data.txt";
        $data = file_get_contents($file);

        // Display the data
        echo "Data from file: " . $data;
    }
}

// Call the function to handle the request
handleRequest();
?>
