<?php


namespace App\Repositories\Admin;

use Illuminate\Support\Facades\DB;

class AdminSqlRepository implements AdminRepositoryInterface
{
    public function getDataById($id)
    {
        return DB::table('admin_users')
            ->where('id', $id)
            ->first();
    }

    public function getDataByUserName($userName)
    {
        return DB::table('admin_users')
            ->where('username', $userName)
            ->first();
    }

    public function updateData($data,$id)
    {
        return DB::table('admin_users')
            ->where('id', $id)
            ->update([
                'password' => $data['password'],
                'contact_person_title' => $data['contact_person_title'],
                'name' => $data['name'],
                'job_title' => $data['job_title'],
                'last_name' => $data['last_name'],
                'alternate_email' => $data['alternate_email'],
                'phone' => $data['phone'],
                'extension' => $data['extension'],
                'mobile' => $data['mobile'],
                'fax' => $data['fax'],
                'department' => $data['department'],
                'qq' => $data['qq'],
                'websiteUrl' => $data['websiteUrl'],
                'address' => $data['address'],
                'address2' => $data['address2'],
                'zip' => $data['zip'],
                'province' => $data['province'],
                'city' => $data['city'],
                'country_id' => $data['country_id'],
                'country_name' => $data['country_name'],
                'user_type' => $data['user_type'],
                'language' => $data['language'],
                'is_show_dashboard' => $data['is_show_dashboard'],
                'is_access' => $data['is_access'],
                'status' => $data['status'],
        ]);
    }

    public function deleteData($id)
    {
        return DB::table('admin_users')
            ->where('id', $id)
            ->delete();
    }
}