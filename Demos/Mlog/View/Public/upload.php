<form enctype="multipart/form-data" action="<?php $this->w(\M\App::buildUrl('User','upload')) ?>" method="post">
    <input type="file" name="image" >
    <input type="submit" name="upload" value="上传">
</form>