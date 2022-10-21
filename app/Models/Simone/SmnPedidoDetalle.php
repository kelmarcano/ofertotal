<?php

namespace App\Models\Simone;

use Illuminate\Database\Eloquent\Model;

class SmnPedidoDetalle extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'smn_comercial.smn_pedido_detalle';
    public $timestamps = false;
    protected $primaryKey = "smn_pedido_detalle_id";

    public function getNextStatementId(){
        $next_id = $this->selectRaw("nextval('smn_comercial.seq_smn_pedido_detalle')")->first();
        return $next_id->nextval;
    }

}
