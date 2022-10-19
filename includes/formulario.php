<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-2">Cadastrar vaga</h2>

    <form action="" method="post">

        <div class="form-group">
            <label for="titulo">Titulo da Vaga</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" rows="4"></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="status">Status</label>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="s" checked>Ativo
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="n">Inativo
                </label>
            </div>
        </div>

        <div class="form-group mt-3">
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </div>
    </form>
</main>