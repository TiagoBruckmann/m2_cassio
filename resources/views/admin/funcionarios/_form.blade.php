<div class="form-group">
    <label>Funcionario</label>
    <input type="text" name="clientes" value="{{ isset($registro->clientes) ? $registro->clientes : ''}}">
</div>

<div class="form-group">
    <label>Telefone</label>
    <input type="text" name="fone" value="{{ isset($registro->fone) ? $registro->fone : '' }}">
</div>

<div class="form-group">
    <label>Admissão</label>
    <input type="date" name="dt_admissao" value="{{ isset($registro->dt_admissao) ? $registro->dt_admissao : '' }}">
</div>

<div class="form-group">
    <label>Salario</label>
    <input type="text" name="vl_salario" value="{{ isset($registro->vl_salario) ? $registro->vl_salario : '' }}">
</div>
