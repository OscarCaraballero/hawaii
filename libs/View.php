<?php

class View {
    private $_controlador;
    public $title;    
    private $header;   
    private $footer;  
    private $_layoutParams;
    
    
    public function __construct() {
        $uri = explode('/',$_SERVER["REQUEST_URI"]);
        $uri = array_pop($uri);
        
        /*if (!empty($_GET['command']))
            $this->_controlador = $_GET['command'];
        else
            $this->_controlador = "Main";*/
        
        if (!empty($uri))
            $this->_controlador = $uri;
        else
            $this->_controlador = "Inicio";
        
        $this->title = "";
        $this->header = "view/". "header.php";
        $this->footer = "view/". "footer.php";
        
        $this->layoutParams = array (
            'ruta_css' => "view/". "css/",
            'ruta_img' => "view/". "images/",
            'ruta_js' =>  "view/". "js/"
        );
    }
    
    public function render($data = array()){ 
        echo self::setParamsCss();
        echo self::setParamsScripts();
        echo self::setParamsImages();
        echo self::setParamsMeta();
        $rutaVista = 'view/' . $this->_controlador . 'View' . '.php';
        if (is_readable($rutaVista)){
            require_once $this->header;
            require_once $rutaVista;
            require_once $this->footer;
        } else {
            throw new Exception('View exception: '.$rutaVista.' no es accesible');
        }
    }

    // Indicar el titulo de la vista
    public function setTitle($title){
        $this->title = $title;
    }
    
    // Por si se desea usar un header o un footer distinto.
    // Es necesario poner la ruta completa.
    public function setHeader($header){
        $this->header = $header;
    }
    
    public function setFooter($footer){
        $this->footer = $footer;
    }
    
    // Para modificar los parametros del layout.
    // Con la opcion "all" pasamos a modificar los 3 parametros (ruta_css, ruta_js y ruta_img)
    // y, por lo tanto, $paramas es un array.
    // Si indicas, por ejemplo, la opcion "ruta_css", la variable $paramas setá 
    // una string con la ruta de ese único campo.
    public function setParamsScripts() {
        $scripts = "";
        $scripts.= '<script src="' . $this->layoutParams['ruta_js'] . 'jquery-1.11.2.js"></script>';
        $scripts.= '<script src="' . $this->layoutParams['ruta_js'] . 'bootstrap.js"></script>';
        //$scripts.= '<script src="'. $this->layoutParams['ruta_js'] . $this->_controlador.'.js"></script>';
        return $scripts;
    }
    
    
    public function setParamsImages(){
        $images = "";
        //$images.= '<link rel="shortcut icon" href="'. $this->layoutParams['ruta_img'] .'favicon.ico">';
        return $images;
    }
    
    public function setParamsCss(){
        $css = "";
        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'unsemantic-grid-desktop.css">';
        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'mainHawaii.css">';
        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'unsemantic-grid-base.css">';        
        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'unsemantic-grid-base.css">';
        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'bootstrap.css">';           
//        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'reset.css">';
//        $css .= '<link rel="stylesheet" type="text/css" href="'. $this->layoutParams['ruta_css'] .'style.css">';
        return $css;
    }
    
    public function setParamsMeta(){
        //$meta = "";
        //$meta = '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />';
        $meta = '<meta name="viewport" content="width=device-width, initial-scale=1">';
        $meta .= '<meta charset="UTF-8">';
        return $meta;
    }
}
