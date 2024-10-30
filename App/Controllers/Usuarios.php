<?php

class Usuarios extends Controller
{

    public function cadastrar()
    {

<<<<<<< HEAD
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
=======
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS );
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha']),
            ];

            if (in_array("", $formulario)) :

                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;

                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;

                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirma_senha'])) :
                    $dados['confirma_senha_erro'] = 'Confirme a Senha';
                endif;
            else :
<<<<<<< HEAD
                if(Checa::checarNome($formulario['nome'])):
                    $dados['nome_erro'] = 'O nome informado é inválido';
                elseif(Checa::checarEmail($formulario['email'])):
                    $dados['email_erro'] = 'O email informado não é válido';
               
                    elseif (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 7 caracteres';
                elseif ($formulario['senha'] != $formulario['confirma_senha']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else:
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
=======
                                  
                if (strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif ($formulario['senha'] != $formulario['confirma_senha']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else:
>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
                    echo 'Pode cadastrar os dados<hr>';
                endif;

            endif;
<<<<<<< HEAD
=======

>>>>>>> 33129ec43b55028269abdbb3d46b1ef463f9fc49
            var_dump($formulario);
        else :
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
            ];

        endif;


        $this->view('usuarios/cadastrar', $dados);
    }
}