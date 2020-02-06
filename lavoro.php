<?php
include_once('persona.php');
class Lavoro
{
    public $mansione;
    public $stipendio;
    public function verificaStipendio()
    {
        if (!is_numeric($this->stipendio)) {
            throw new Exception("Non hai inserito un numero valido");
        }
        return true;
    }
}
?>
