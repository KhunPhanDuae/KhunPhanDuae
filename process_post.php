<?php
function savePost($content) {
    // Define the file path for storing posts
    $postFile = "posts.txt";

    // Prepare the post data (add a timestamp for reference)
    $post = date("Y-m-d H:i:s") . "\n" . $content . "\n\n";

    // Append the post to the file
    file_put_contents($postFile, $post, FILE_APPEND);
}

function saveComment($postId, $comment) {
    // Define the file path for storing comments
    $commentFile = "comments.txt";

    // Prepare the comment data (add a timestamp for reference)
    $commentData = date("Y-m-d H:i:s") . "\nPost ID: " . $postId . "\n" . $comment . "\n\n";

    // Append the comment to the file
    file_put_contents($commentFile, $commentData, FILE_APPEND);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if it's a post submission
    if (isset($_POST["post-content"])) {
        $postContent = $_POST["post-content"];

        // Save the post
        savePost($postContent);

        // Redirect to a success page or back to the form
        header("Location: success.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Check if it's a comment submission
    if (isset($_GET["post-id"]) && isset($_GET["comment-content"])) {
        $postId = $_GET["post-id"];
        $commentContent = $_GET["comment-content"];

        // Save the comment
        saveComment($postId, $commentContent);

        // Redirect to a success page or back to the comment form
        header("Location: success.php");
        exit();
    }
}
?>
