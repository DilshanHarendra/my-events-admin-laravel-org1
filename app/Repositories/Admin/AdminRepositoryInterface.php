<?php


namespace App\Repositories\Admin;


interface AdminRepositoryInterface
{
    public function getDataById($id);

    public function getDataByUserName($userName);

    public function updateData($data,$id);

    public function deleteData($id);

}