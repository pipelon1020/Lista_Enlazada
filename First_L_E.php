<?php
//  Lista enlazada)

class Nodo
{
    public $Dato; //Guarda los datos
    public $Siguiente; //Enlaza las listas

    public function __construct($Dato)
    {
        $this->Dato = $Dato;        // Asigna el dato al nodo
        $this->Siguiente = null;    // Inicializa el siguiente nodo como null
    }
}

class L_S()
{
    public $Cabeza;

    
    public function __construct()
    {
        $this->Cabeza= null;   // Inicializa la lista vacía
    }

    public function insertar($dato)
    {
        $NuevoNodo= new Nodo($dato);       // Crea un nuevo nodo con el dato
        $NuevoNodo->$Siguiente=$this-Cabeza;     // El nuevo nodo apunta al actual primer nodo
        $this->Cabeza= $nuevoNodo;    // El nuevo nodo se convierte en la cabeza de la lista                                           
    }

    //Imprimir la lista en formato HTML
    public imprimirHTML()
    {
        $Actual= $this->Cabeza;

        echo"<ul>";
        while($Actual!=null)
        {
            echo "<li>".$Actual."</li>";
            $Actual= $Actual->$Siguiente;
        }
        echo"</ul>";
    }
}

?>