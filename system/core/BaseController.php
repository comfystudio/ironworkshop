<?php
/** BaseController */
class BaseController{
	protected $_view;
	
    /** __construct */
    public function __construct(){
		$this->_view = new View();
		
		// Load the Site Model ($modelName, $area)
		$this->_siteModel = $this->loadModel('site');

        //checking sessions flash so we can always pass message along pages
        if(!empty($_SESSION['backofficeFlash'])){
			$this->_view->flash = $_SESSION['backofficeFlash'];
			Session::destroy('backofficeFlash');
		}

        $this->_contactModel = $this->loadModel('contactUs');
        $this->_view->contact = $this->_contactModel->getAllData();
        if(empty($this->_view->contact[0]['facebook'])){
            $this->_view->contact[0]['facebook'] = 'https://www.facebook.com/Iron-Workshop-1479599665631954/';
        }
        if(empty($this->_view->contact[0]['instagram'])){
            $this->_view->contact[0]['instagram'] = 'https://www.instagram.com/explore/tags/theironworkshop/';
        }

    }
	
    /**
     * loadModel - Loads a Model
	 * 
     * @param string $modelName - The name of the Model
	 * @param string $area - The Area where the Model is located
     * @return ..\app\$area\models
     */
	public function loadModel($modelName, $area = false){
		// Create the modelPath
		$modelPath = 'app/';
		
		// Check if an Area has been defined
		if ($area){
			// Create the modelPath
		    $modelPath .= 'areas/' . $area . '/';
		}
		
		// Create the modelPath
		$modelPath .= 'models/'. $modelName . '.php';
		
		// Check if the Model Path Exists
		if (file_exists($modelPath)){
			// Require the Model
			require_once ($modelPath);
			
			// Instantiate the Model
			return new $modelName();
		}
	}

}
?>