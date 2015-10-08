<?php 
session_start();
require_once('new-connection.php');

$messages_query = "SELECT messages.id, users.first_name, users.last_name, messages.created_at, message
                   FROM messages 
                   LEFT JOIN users ON users.id = messages.user_id
                   ORDER BY messages.created_at DESC";

$messages_results = fetch($messages_query);

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Coding Dojo | CS 210 &mdash; PHP &amp; MySQL | PHP with MySQL, Assignment V — The Wall Home</title>
        <link rel="stylesheet" href="style.css">   
    </head>
    <body>
        <div id="header">
            <h2 id="logo" class="float-left display-inline-block">CodingDojo Wall</h2>
            <ul class="float-right display-inline-block">
                <li><strong><?php echo "{$_SESSION['first_name']} {$_SESSION['last_name']}"; ?></strong></li>
                <li class="last"><a href="process.php">Log off</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div id="main" class="padding-top-twenty">
            <div class="row">
                <h1 class="text-align-center">Welcome to The Wall, <strong><?php echo "{$_SESSION['first_name']}"; ?></strong>!</h1>   
                <div class="win-fail-messages">
                    <?php
                        if(isset($_SESSION['errors'])) {
                            
                            foreach($_SESSION['errors'] as $error) {
                                echo "<p class='fail'>{$error}</p>";
                            }

                            unset($_SESSION['errors']);
                        }
                        if(isset($_SESSION['success_message'])) {
                            echo "<p class='win'>{$_SESSION['success_message']}</p>";
                            unset($_SESSION['success_message']);
                        }
                    ?>
                </div>
                <form id="message-box" class="clearfix" action="process.php" method="post">
                    <input type="hidden" name="action" value="post_message">
                    <p>
                        <label>Post a message:</label> 
                        <textarea name="message" placeholder="What's on your mind?"></textarea>
                    </p>
                    <button class="dark-grey-background" type='submit'>Post Message</button>
                </form>
                <hr />    
            </div>
            <div class="row">
                <ul class="messages-and-comments">
                    <?php foreach($messages_results as $row) { ?>
                        <li>
                            <h3><?= $row['first_name'] ?> <?= $row['last_name'] ?> | <?= $row['created_at'] ?> </h3>
                            <p><?= $row['message'] ?></p>
                        </li>    
                        <?php 
                            
                            $comments_query = "SELECT * FROM comments 
                                               LEFT JOIN messages ON messages.id = comments.message_id
                                               LEFT JOIN users ON users.id = comments.user_id 
                                               WHERE messages.id = " . $row['id'] . "   
                                               ORDER BY comments.created_at ASC";                 

                            $comments_results = fetch($comments_query);

                            if(count($comments_results) > 0) {
   
                                foreach($comments_results as $row2) {

                                // $_SESSION['user_id'] = $comments_results[0]['id'];
                                // $_SESSION['first_name'] = $comments_results[0]['first_name'];
                                // $_SESSION['last_name'] = $comments_results[0]['last_name'];
                                // $_SESSION['message_id'] = $comments_results[0]['message_id'];

                                // $comments_query = "SELECT * FROM comments 
                                //                    LEFT JOIN messages ON messages.id = comments.message_id
                                //                    LEFT JOIN users ON users.id = messages.user_id
                                //                    WHERE messages.id = " . $row['id'] . " 
                                //                    AND users.first_name = " . $row['first_name'] . "
                                //                    AND users.last_name = " . $row['last_name'] . "  
                                //                    ORDER BY comments.created_at ASC";                 

                                // $comments_results = fetch($comments_query);

                        ?>

                            <li>
                                <ul>
                                    <li>
                                        <h3><?= $row2['first_name'] ?> <?= $row2['last_name'] ?> | <?= $row2['created_at'] ?> </h3>
                                        <p><?= $row2['comment'] ?></p>
                                    </li>
                                </ul>
                            </li>

                        <?php } } ?>

                        <li class="padding-bottom-thirty border-bottom">
                            <form id="comment-box" class="clearfix" action="process.php" method="post">
                                <input type="hidden" name="action" value="post_comment">
                                <input type="hidden" name="comment_message_id" value="<?php echo $row['id']; ?>">
                                <p>
                                    <textarea name="comment" placeholder="Leave a comment"></textarea>
                                </p>
                                <button class="medium-grey-background" type='submit'>Post Comment</button>
                            </form>
                        </li>    
                
                    <?php } ?>
                </ul>
            </div>    
        </div>    
    </body>
</html>
