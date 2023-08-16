<?php
    include 'app/service/advertisementService.php';

    class AdvertisementController{
        private AdvertisementService $advertisementService;

        function __construct() {
            $this->advertisementService = new AdvertisementService();
        }

        function getAllAdvertisements(){
            $advertisements = $this->advertisementService->getAllAdvertisements();
            return $advertisements;
        }
    }
?>