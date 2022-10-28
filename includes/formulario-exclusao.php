<main>


    <h2 class="mt-2">EXCLUIR VAGA</h2>

    <form method="post">

        <div class="form-group">
            <p>Voce deseja realmente excluir a vaga <strong><?=$obVaga->titulo?> ?</strong></p>
        </div>
        <div class="form-group">
            <button name="excluir" class="btn btn-danger" type="submit">Excluir</button>

            <a href="index.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
        </div>
    </form>
</main>