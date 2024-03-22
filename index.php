<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        <?php include 'dist/index.css'; ?>
    </style>
</head>
<body>
    
    <?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();

        // Display post content with Gutenberg blocks
        the_content();

    endwhile;
else :
    // If no content, display a message or fallback content
    echo 'No content available.';
endif;
?>

</body>
</html>
