<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastre-se
        </div>
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Preecha o formulário abaixo para fazer seu cadastro</small></p>

            <form name="cadastrar" method="POST" action="<?= URL ?>/usuarios/cadastrar" class="mt-4">
<<<<<<< HEAD
            <div class="form-group">
                    <label for="nome">E-mail: <sup class="text-danger">*</sup></label>
                    <input type='text' name='nome' id='nome'  class='form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>'>
                    <div class='invalid-feedback'>
                        <?= $dados['nome_erro'] ?>
=======
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type='text' name='nome' id='nome' value='<?=$dados['nome']?>' class='form-control <?= $dados['nome_erro'] ? 'is-invalid' : '' ?>'>
                    <div class="invalid-feedback">
                        <?= $dados["nome_erro"] ?>
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
<<<<<<< HEAD
                    <input type='email' name='email' id='email'  class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
=======
                    <input type='email' name='email' id='email' value='<?=$dados['email']?>' class='form-control <?= $dados['email_erro'] ? 'is-invalid' : '' ?>'>
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
                    <div class='invalid-feedback'>
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
<<<<<<< HEAD
                    <input type='password' name='senha' id='senha'  class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
=======
                    <input type='password' name='senha' id='senha' value='<?=$dados['senha']?>' class='form-control  <?= $dados['senha_erro'] ? 'is-invalid' : '' ?>'>
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirma_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
<<<<<<< HEAD
                    <input type='password' name='confirma_senha' id='confirma_senha' class='form-control <?= $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>'>
=======
                    <input type='password' name='confirma_senha' id='confirma_senha' value='<?=$dados['confirma_senha']?>'class='form-control <?= $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>'>
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
                    <div class="invalid-feedback">
                        <?= $dados['confirma_senha_erro'] ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="#">Você tem uma conta? Faça login</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>