<?php

class ajaxController
{ 
    public function saveLink () 
    {
        if ( !isset($_POST['grupo'], $_POST['subGrupo'], $_POST['name'], $_POST['link']) ) {
            echo 'ERROR!';
        } else {
            $linkController = new linksController;
            $response = $linkController->saveNewLink($_POST['name'], $_POST['link'], $_POST['grupo'], $_POST['subGrupo']);
            
            $newBox = '<div class="link-box">
            <div class="line "></div>
            <div class="text">
                '.$_POST['name'].'
            </div>
            <div class="tag ">'.$_POST['subGrupo'].'</div>
            </div>';
            echo $newBox;
        }
    }
}
