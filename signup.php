<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjContents->main_content();
    $ObjContents->sidebar();
    $ObjLayouts->footer();