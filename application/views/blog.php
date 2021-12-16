<!DOCTYPE html>
<html lang="en">

<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <a href="<?php echo site_url('blog/add'); ?>"> + Tambah Artikel</a>
    <?php foreach($blog as $key=> $blog):?>
        <a href="<?php echo site_url('blog/edit/' . $blog['id']); ?>"> Edit</a>
    <div class="blog">
        <h2>
            <a href="<?php echo site_url('blog/detail/'.$blog['url']);?>">
               <?php echo $blog['title']; ?>                
            </a>
        </h2>
        </h2>
        <?php echo $blog['content'];
        endforeach;
        ?>
</body>
</html>
