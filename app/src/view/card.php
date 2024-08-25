<?php
use App\Database;
use \App\models\Posts;

$db = new Database();
$postModel = new Posts($db);
$posts = $postModel->getAll();
?>

<?php foreach($posts as $post) : ?>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?=$post['title']?></h5>
        <p class="card-text"><?=$post['content']?></p>
        <a href="#" class="card-link">Delete</a>
        <a href="#" class="card-link">Edit</a>
    </div>
</div>
<?php endforeach;?>