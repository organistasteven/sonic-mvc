<?php
class CatalogController extends CoreController
{
 
    

   

    public function characters($params) {
        $characterstId = $params['id'];


        $characterModel = new Character();
        $characters = $characterModel->findAll($characterstId);

        $viewDataValue = [
            'character' => $characters
        ];

        
        $this->show('character', $viewDataValue );
    }

    
        
    
}