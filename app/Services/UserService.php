<?php

namespace App\Services;

use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\UserRepository;
use App\Validators\UserValidator;

class UserService
{
    private $repository;
    private $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /* Implementar a validação de CPF e verificação telefone apenas com números*/
    public function store($data)
    {
        try
        {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $usuario = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => 'Usuário cadastrado',
                'data' => $usuario,
            ];
        }
        catch(\Exception $e)
        {
            return [
                'success' => false,
                'messages' => 'Erro de execução',
            ];
        }
    }
    public function update(){}
    public function delete(){}

    public function destroy($user_id){
        try
        {
            $this->repository->deleteWhere(['id' => $user_id]);

            return [
                'success' => true,
                'messages' => 'Usuário removido',
                'data' => null,
            ];
        }
        catch(\Exception $e)
        {
            return [
                'success' => false,
                'messages' => 'Erro de execução',
            ];
        }
    }
}