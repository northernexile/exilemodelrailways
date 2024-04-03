<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/northernexile/exilemodelrailways.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('exilemodelrailways.co.uk')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/exilemodelrailways');

// Hooks

after('deploy:failed', 'deploy:unlock');
