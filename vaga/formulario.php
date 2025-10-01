<main>
  
    <section>
        <a href="listar.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

      <h2><?=TITLE?></h2>

      <form method="post">
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="titulo" value="<?=$obVaga->titulo?>">

        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"><?=$obVaga->descricao?></textarea>
        </div>

        <div class="form-group">
            <label>Quantidade</label>
            <input type="text" class="form-control" name="quantidade" value="<?=$obVaga->quantidade?>">

        </div>

        <div class="form-group">
            <label>Remuneracao</label>
            <input type="text" class="form-control" name="remuneracao" value="<?=$obVaga->remuneracao?>">

        </div>
        <div class="form-group">
            <label>Data Abertura</label>
            <input type="text" class="form-control" name="data_abertura" value="<?=$obVaga->dataAbertura?>">

        </div>

        <div class="form-group">
            <label>Data Fechamento</label>
            <input type="text" class="form-control" name="data_fechamento" value="<?=$obVaga->dataFechamento?>">

        </div>


        


    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

      </form>
</main>