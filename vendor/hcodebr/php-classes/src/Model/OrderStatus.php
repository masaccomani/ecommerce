<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class OrderStatus extends Model {

    const EM_ABERTO = 1;
    const AGUARDANDO_PAGAMENTO = 2;
    const PAGO = 3;
    const ENTREGUE = 4;

    public function get(int $idstatus)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * fROM tb_ordersstatus WHERE idstatus = :idstatus", [
            ':idstatus'=>$idstatus
        ]);

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }
}

?>