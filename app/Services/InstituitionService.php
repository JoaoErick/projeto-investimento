<?php

namespace App\Services;

use Prettus\Validator\Contracts\ValidatorInterface;
use App\Repositories\InstituitionRepository;
use App\Validators\InstituitionValidator;

class InstituitionService
{
    private $repository;
    private $validator;

    public function __construct(InstituitionRepository $repository, InstituitionValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /* Implementar a validação de CPF e verificação telefone apenas com números*/
    public function store(array $data)
    {
        try
        {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $instituition = $this->repository->create($data);

            return [
                'success' => true,
                'messages' => 'Instituição cadastrada',
                'data' => $instituition,
            ];
        }
        catch(\Exception $e)
        {
            switch(get_class($e))
            {
                case QueryException::class     : return ['success' => false, 'messages' => $e->getMessage()];
                case ValidatorException::class : return ['success' => false, 'messages' => $e->getMessageBag()];
                case Exception::class          : return ['success' => false, 'messages' => $e->getMessage()];
                default                        : return ['success' => false, 'messages' => get_class($e)];
            }
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
                'messages' => 'Instituição removida',
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