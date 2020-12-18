<div class="form-group">
    <label>Cliente</label>
    <input type="text" name="clientes" value="{{ isset($registro->clientes) ? $registro->clientes : ''}}">
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="fone" value="{{ isset($registro->fone) ? $registro->fone : '' }}">
</div>
