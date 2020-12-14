<div class="input-field">
    <input type="text" name="projetos" value="{{ isset($registro->projetos) ? $registro->projetos : '' }}">
    <label>Projeto</label>
</div>

<div class="option-field">
    <option>Selecione um cliente</option>
    <select name="clientes[]" id="">
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id_clientes }}">{{ $cliente->cliente }} </option>
        @endforeach
    </select>
</div>

<div class="input-field">
    <input type="text" name="vl_acordado" value="{{ isset($registro->vl_acordado) ? $registro->vl_acordado : '' }}">
    <label>Valor Acordado</label>
</div>

<div class="input-field">
    <input type="text" name="vl_recebido" value="{{ isset($registro->vl_recebido) ? $registro->vl_recebido : '' }}">
    <label>Valor recebido</label>
</div>

<div class="input-field">
    <input type="text" name="dt_pagamento" value="{{ isset($registro->dt_pagamento) ? $registro->dt_pagamento : '' }}">
    <label>Data de pagamento</label>
</div>
