<?php
    require_once "load.php";
    $ObjLayouts->heading();
    $ObjMenus->main_menu();
    $ObjLayouts->banner();
    $Objforms->sign_up_form($ObjGlob);
    $ObjContents->sidebar();
    $ObjLayouts->footer();