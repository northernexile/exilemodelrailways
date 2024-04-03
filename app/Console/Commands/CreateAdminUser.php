<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create:admin:user {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make an admin user';

    /**
     * @param \App\Services\Users\CreateAdminUser $adminUser
     * @return int
     */
    public function handle(\App\Services\Users\CreateAdminUser $adminUser) :int
    {
        $response = Command::FAILURE;
        try {
            $user = $adminUser
                ->setEmail($this->input->getArgument('email'))
                ->setName($this->input->getArgument('name'))
                ->setPassword($this->input->getArgument('password'));

            if(!$user) {
                throw new \Exception('User not created');
            }
            $response = Command::SUCCESS;
            $this->output->success('User created');
        } catch (\Throwable $throwable) {
            $this->output->error($throwable->getMessage());
        } finally {
            return $response;
        }
    }
}
