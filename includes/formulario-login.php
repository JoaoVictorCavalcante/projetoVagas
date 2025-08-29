<main>

    <h2 class="mt-3">Login</h2>

    <form method="post">

        <div class="form-group">
            <label>Login</label>
            <input type="text" class="form-control" name="nome" value="<?= $obAluno->aluno ?>">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="cpf" value="<?= $obAluno->cpf ?>">
        </div>

        <button type="submit" class="btn btn-success">Enviar</button>

        </div>
    </form>

</main>