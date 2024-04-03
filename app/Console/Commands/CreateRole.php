<?php

namespace App\Console\Commands;

use App\Services\Roles\CreateRoleService;
use Illuminate\Console\Command;
use mysql_xdevapi\Exception;

class CreateRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create:role {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a role';

    /**
     * Execute the console command.
     */
    public function handle(
        CreateRoleService $service
    ): int
    {
        $response = Command::FAILURE;
        try {
            $roleName = $this->input->getArgument('name');
            $role = $service->create($roleName);

            if(!$role) {
                throw new Exception('Could not create role: '.$roleName );
            }
            $response = Command::SUCCESS;
        } catch (\Throwable $throwable) {
            $this->output->error($throwable->getMessage());
        } finally {
            return $response;
        }
    }
}
