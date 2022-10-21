<?php

namespace App\Models\Simone;

use Illuminate\Database\Eloquent\Model;

class SmnPedidoCabecera extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'smn_comercial.smn_pedido_cabecera';
    public $timestamps = false;
    protected $primaryKey = "smn_pedido_cabecera_id";

    public function getNextStatementId(){
        $next_id = $this->selectRaw("nextval('smn_comercial.seq_smn_pedido_cabecera')")->first();
        return $next_id->nextval;
    }

    public function getNextStatementIdPedido(){
        $next_id = $this->selectRaw("nextval('smn_comercial.seq_smn_numero_pedido')")->first();
        return $next_id->nextval;
    }

}
