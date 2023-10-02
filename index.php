<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
</head>
<body>
    <header>
        <h1>Welcome to My Blog</h1>
    </header>
    <main>
        <section id="post-section">
            <h2>Create a New Post</h2>
            <form id="post-form" action="process_post.php" method="post">
                <textarea name="post-content" rows="4" cols="50" placeholder="Write your post here"></textarea>
                <button type="submit">Submit Post</button>
            </form>
        </section>
        <section id="comment-section">
            <h2>Recent Posts</h2>
            <?php
            // PHP code to display posts from "posts.txt"
            $postsFile = "posts.txt";
            if (file_exists($postsFile)) {
                $posts = file_get_contents($postsFile);
                $postArray = explode("\n\n", $posts);
                foreach ($postArray as $post) {
                    echo "<div class='post'>" . nl2br($post) . "</div>";
                }
            } else {
                echo "<p>No posts available.</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>
