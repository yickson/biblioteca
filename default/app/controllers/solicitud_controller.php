<?php

/**
 * Controlador de solicitudes
 */
class SolicitudController extends AppController
{

  public function index()
  {
    //Esta vista debe mandar al index principal de esta APP
  }

  public function pedido()
  {
    //Aquí se debe realizar la vista del pedido
  }

  public function devolver()
  {
    //Consulta y devolución del libro
  }

  //Metodos Ajax

  public function listar_directorio()
  {
    $this->data = Directorio::getDirectorio();
    View::select(null, 'json');
  }
}



?>
