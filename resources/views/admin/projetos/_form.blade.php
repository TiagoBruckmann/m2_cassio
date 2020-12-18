<div class="form-group">
    <label>Projeto</label>
    <input type="text" name="projetos" value="{{ isset($registro->projetos) ? $registro->projetos : '' }}">
</div>

<div class="form-group">
    <label>Escolha um cliente</label>
    <select type="integer" name="id_clientes" class="form-control">
       <!-- <option>Selecione um Cliente</option> -->
        @foreach($clientes as $cliente)
            <option class="form-control"  value="{{ isset($cliente->id) ? $cliente->id : '' }}">{{ $cliente->clientes }} </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Valor Acordado</label>
    <input type="text" name="vl_acordado" value="{{ isset($registro->vl_acordado) ? $registro->vl_acordado : '' }}">
</div>

<div class="form-group">
    <label>Valor recebido</label>
    <input type="text" name="vl_recebido" value="{{ isset($registro->vl_recebido) ? $registro->vl_recebido : '' }}">
</div>

<div class="form-group">
<label>Data de pagamento</label>
    <input type="date" name="dt_pagamento" value="{{ isset($registro->dt_pagamento) ? $registro->dt_pagamento : '' }}">
</div>
