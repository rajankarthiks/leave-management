<?php namespace Acme\Registration;

use Laracasts\Commander\CommandHandler;
use Acme\Users\UserRepository;
use User;

class RegisterUserCommandHandler implements CommandHandler {

    /**
     * @var UserRepository
     */
    protected $repository;
    /**
     * @param UserRepository $repository
     */
    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $user = User::register(
            $command->username, $command->email, $command->password
        );
        $this->repository->save($user);

        return $user;
    }

} 