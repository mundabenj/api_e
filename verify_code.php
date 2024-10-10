<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjLayouts->banner();
    $Objforms->verify_code_form($ObjGlob);
    $ObjContents->sidebar();
    $ObjLayouts->footer();