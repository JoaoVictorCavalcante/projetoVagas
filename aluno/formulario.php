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
            <input type="text" class="form-control" name="nome" value="<?=$obAluno->nome?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="cpf" value="<?=$obAluno->cpf?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="email_pessoal" value="<?=$obAluno->email_pessoal?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="email_institucional" value="<?=$obAluno->email_institucional?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="curso" value="<?=$obAluno->curso?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="periodo" value="<?=$obAluno->periodo?>">

        </div>
        <div class="form-group">
            <label>Titulo</label>
            <input type="text" class="form-control" name="data" value="<?=$obAluno->data?>">

        </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>

      </form>
</main>