<?php
namespace App\Repository;

use App\Model\User;
use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function get($id);

    public function store(array $params);

    public function update($id , array $params);

    public function delete($id);

    public function checkAdmin();


}
