<?php

include 'app/controller/advertisementController.php';

$advertisementController= new AdvertisementController();
$advertisements = $advertisementController->getAllAdvertisements();

if(empty($advertisements)){
    echo'<h3>There are no advertisements!</h3>';
}
else {
    echo'<div class="advertisement-list">';
    foreach($advertisements as $advertisment){
        echo'<a href=""><div class="advertisement-list-item">';
        echo'<i class="fa-solid fa-rectangle-ad fa-2xl"></i><br>';
        echo'<h4>'.$advertisment->get_title().'</h4>';
        echo'<h4>'.$advertisment->get_user()->get_name().'</h4></div></a>';
    }
    echo '</div>';
}