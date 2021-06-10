<?php 
/*
    ./app/views/posts/show.php 
    Variables disponibles :
        - $post ARRAY(id, title, content, created_at, image, ...)
        - $tags ARRAY(ARRAY(id, name))
        - $author ARRAY(id, firstname, lastname, biography, image)
        - $comments ARRAY(ARRAY(id, content, pseudo, created_at, post_id))
*/
?>
<!-- POST ########################################### -->
<p class="mb-5">
    <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<?php echo $post['content']; ?>

<div class="tag-widget post-tag-container mb-5 mt-5">
    <div class="tagcloud">
        <?php foreach($tags as $tag): ?>
            <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?></a>
        <?php endforeach; ?>
    </div>
</div>

<!-- AUTHOR ########################################### -->
<div class="about-author d-flex p-4 bg-light">
    <div class="bio mr-5">
    <img src="images/<?php echo $author['image'] ?>" alt="Image placeholder" class="img-fluid mb-4">
    </div>
    <div class="desc">
    <h3>
        <?php echo $author['firstname']; ?> 
        <?php echo $author['lastname']; ?>
    </h3>
    <p><?php echo $author['biography'] ?></p>
    </div>
</div>

<!-- COMMENTS ########################################### -->
<div class="pt-5 mt-5">
    <h3 class="mb-5"><?php echo count($comments); ?> Comments</h3>
    <ul class="comment-list">
        <?php foreach($comments as $comment): ?>
            <li class="comment">
                <div class="comment-body">
                    <h3> <?php echo $comment['pseudo']; ?></h3>
                    <div class="meta mb-3">
                    <?php echo \Core\Functions\formater_date($comment['created_at'], 'F d, Y \a\t g:i a'); ?></div>
                    <p><?php echo $comment['content']; ?></p>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- END comment-list -->

<!-- COMMENTS FORM ########################################### -->
    <?php include '../app/views/comments/_form.php'; ?>



</div>