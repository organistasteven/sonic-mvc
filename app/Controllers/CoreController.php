<?php
    class CoreController {

     
    protected function show($viewPage, $viewData = []) {

     
        
        $characterModel = new Character();
        $characters = $characterModel->findAll();

        $typeModel = new Type();
        $types = $typeModel->findAll();

        $viewData["characters"] = $characters;
        $viewData["types"] = $types;

        
        $absoluteUrl = $_SERVER["BASE_URI"];

        extract($viewData);

        require_once __DIR__ . "/../../views/partials/header.tpl.php";
        require_once __DIR__ . "/../../views/$viewPage.tpl.php";
        require_once __DIR__ . "/../../views/partials/footer.tpl.php";
    }

    }