<div class="input-field">
        <!-- Essa tela será reaproveitada para a edição, então é utilizada a função isset que verifica se uma 
            variável existe ou não para decidir se preenche o campo -->
        <input type="text" name="curso" value="{{ isset($registro->curso) ? $registro->curso : '' }}">
        <label>Nome do curso</label>
    </div>
    
    <div class="input-field">
        <input type="text" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
        <label>Descricao</label>
    </div>
    
    <div class="input-field">
        <input type="text" name="valor" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
        <label>Valor</label>
    </div>
    
    <div class="file-field input-field">
        <div class="btn-blue">
            <span>Imagem</span>
            <input type="file" name="imagem">
        </div>
        <div class="file-path-wrapper">
            <input type="text" class="file-path-validate">
        </div>
    </div>

    @if(isset($registro->imagem))
    <div>
        <img width="150" src="{{ asset($registro->imagem) }}">
    </div>
    @endif
    
    <div>
        <p>
            <label>
                <input type="checkbox" name="publicado"/>
                <span>Publicado?</span>
            </label>
        </p>
        <br><br>
    </div>