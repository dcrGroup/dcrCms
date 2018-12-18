<?php
// +----------------------------------------------------------------------
// | cms
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: drkj
// +----------------------------------------------------------------------

if(file_exists(CMF_ROOT."data/conf/database.php")){
    $database=include CMF_ROOT."data/conf/database.php";
}else{
    $database=[];
}

return $database;
