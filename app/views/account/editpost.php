<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
    <label for="title">Share Title</label>
    <input type="text" name="title" value="<?php echo $viewmodel[0]['title'] ?>">
    <br>
    <label for="body">Share Body</label>
    <textarea name="body" cols="30" rows="10"><?php echo $viewmodel[0]['body'] ?></textarea>
    <br>
    <label for="link">Link</label>
    <input type="text" name="link" value="<?php echo $viewmodel[0]['link'] ?>">
    <br>
    <input type="submit" value="submit" name="submit">
    <a href="<?php echo ROOT_PATH;?>">Cancel</a>
</form>