<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $arrayOfMain = [
            [['mainolimpiade', 'mainposterpublic'], ['main_group'], ['Main'], ['Olimpiade', 'Poster Public']],
            [['mainuser_view', 'mainuser_create_edit', 'mainuser_delete'], ['main_group'], ['User'], ['View', 'Create/Edit', 'Delete']],
            [['mainusertype_view', 'mainusertype_create_edit', 'mainusertype_delete'], ['main_group'], ['User Type'], ['View', 'Create/Edit', 'Delete']],
            [['mainsertifikat_view', 'mainsertifikat_edit'], ['main_group'], ['Sertifikat'], ['View', 'Edit']],
            [['mainsettings_view', 'mainsettings_edit'], ['main_group'], ['Setting'], ['View', 'Edit']],
        ];
        $permissions1 = collect($arrayOfMain)->flatMap(function ($permission) {
            return collect($permission[0])->map(function ($name, $index) use ($permission) {
                return [
                    'name' => $name,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'description' => $permission[2][0], // Assuming description is a single value
                    'group' => $permission[1][0], // Assuming group is a single value
                    'label' => isset($permission[3][$index]) ? $permission[3][$index] : null, // Map the label based on index
                ];
            });
        });
        Permission::insert($permissions1->toArray());

        $arrayOfTeamOlim = [
            [['olimcabang_view','olimcabang_create_edit','olimcabang_delete'],['olimpiade_group'],['Cabang'], ['View', 'Create/Edit', 'Delete']],
            [['olimrayon_view','olimrayon_create_edit','olimrayon_delete'],['olimpiade_group'],['Rayon'], ['View', 'Create/Edit', 'Delete']],
            [['olimpeserta_view','olimpeserta_create_edit','olimpeserta_delete'],['olimpiade_group'],['Peserta'], ['View', 'Create/Edit', 'Delete']],
            [['olimujian_view','olimujian_create_edit','olimujian_delete'],['olimpiade_group'],['Ujian'], ['View', 'Create/Edit', 'Delete']],
            [['olimujiansoal_view','olimujiansoal_create_edit','olimujiansoal_delete'],['olimpiade_group'],['Soal'], ['View', 'Create/Edit', 'Delete']],
            [['olimujiansubyek_view','olimujiansubyek_create_edit','olimujiansubyek_delete'],['olimpiade_group'],['Subyek'], ['View', 'Create/Edit', 'Delete']],
            [['olimtest_view','olimtest_create_edit','olimtest_delete'],['olimpiade_group'],['Assign Test'], ['View', 'Create/Edit', 'Delete']],
            [['olimmonitor_view','olimmonitor_create_edit','olimmonitor_delete'],['olimpiade_group'],['Monitor'], ['View', 'Create/Edit', 'Delete']],
            [['olimpengumuman_view','olimpengumuman_create_edit','olimpengumuman_delete'],['olimpiade_group'],['Pengumuman'], ['View', 'Create/Edit', 'Delete']],
            [['olimpembayaran_view','olimpembayaran_create_edit','olimpembayaran_delete'],['olimpiade_group'],['Pembayaran'], ['View', 'Create/Edit', 'Delete']],
            [['olimgelombang_view', 'olimgelombang_create_edit', 'olimgelombang_delete'],['olimpiade_group'],['Gelombang'], ['View', 'Create/Edit', 'Delete']],
        ];
        $permission2 = collect($arrayOfTeamOlim)->flatMap(function ($permission) {
            return collect($permission[0])->map(function ($name, $index) use ($permission) {
                return [
                    'name' => $name,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'description' => $permission[2][0], // Assuming description is a single value
                    'group' => $permission[1][0], // Assuming group is a single value
                    'label' => isset($permission[3][$index]) ? $permission[3][$index] : null, // Map the label based on index
                ];
            });
        });
        Permission::insert($permission2->toArray());

        $arrayOfTeamPoster = [
            [['postercabang_view','postercabang_create_edit','postercabang_delete'],['poster_group'],['Cabang'], ['View', 'Create/Edit', 'Delete']],
            [['posterrayon_view','posterrayon_create_edit','posterrayon_delete'],['poster_group'],['Rayon'], ['View', 'Create/Edit', 'Delete']],
            [['posterpeserta_view','posterpeserta_create_edit','posterpeserta_delete'],['poster_group'],['Peserta'], ['View', 'Create/Edit', 'Delete']],
            [['posterpengumpulan_view','posterpengumpulan_create_edit','posterpengumpulan_delete'],['poster_group'],['Pengumpulan'], ['View', 'Create/Edit', 'Delete']],
            [['posterpenilaian_view','posterpenilaian_create_edit','posterpenilaian_delete'],['poster_group'],['Penilaian'], ['View', 'Create/Edit', 'Delete']],
            [['postertest_view','postertest_create_edit','postertest_delete'],['poster_group'],['Assign Test'], ['View', 'Create/Edit', 'Delete']],
            [['posterpembayaran_view','posterpembayaran_create_edit','posterpembayaran_delete'],['poster_group'],['Pembayaran'], ['View', 'Create/Edit', 'Delete']],
            [['postergelombang_view', 'postergelombang_create_edit', 'postergelombang_delete'],['poster_group'],['Gelombang'], ['View', 'Create/Edit', 'Delete']],
        ];
        $permission3 = collect($arrayOfTeamPoster)->flatMap(function ($permission) {
            return collect($permission[0])->map(function ($name, $index) use ($permission) {
                return [
                    'name' => $name,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                    'description' => $permission[2][0], // Assuming description is a single value
                    'group' => $permission[1][0], // Assuming group is a single value
                    'label' => isset($permission[3][$index]) ? $permission[3][$index] : null, // Map the label based on index
                ];
            });
        });
        Permission::insert($permission3->toArray());

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
        
        $user = User::where('name', 'Admin')->first();
        $user->assignRole('admin');
    }
}

// $arrayOfPermissions = [
//     'olimpiade','posterpublic',
//     'user_view','user_create_edit','user_delete',
//     'user_type_view','user_type_create_edit','user_type_delete',
//     'sertifikat_view','sertifikat_edit',
//     'settings_view', 'settings_edit',
//     'olim_cabang_view','olim_cabang_create_edit','olim_cabang_delete',
//     'olim_rayon_view','olim_rayon_create_edit','olim_rayon_delete',
//     'olim_peserta_view','olim_peserta_create_edit','olim_peserta_delete',
//     'olim_ujian_view','olim_ujian_create_edit','olim_ujian_delete',
//     'olim_ujiansoal_view','olim_ujiansoal_create_edit','olim_ujiansoal_delete',
//     'olim_ujiansubyek_view','olim_ujiansubyek_create_edit','olim_ujiansubyek_delete',
//     'olim_test_view','olim_test_create_edit','olim_test_delete',
//     'olim_monitor_view','olim_monitor_create_edit','olim_monitor_delete',
//     'olim_pengumuman_view','olim_pengumuman_create_edit','olim_pengumuman_delete',
//     'olim_pembayaran_view','olim_pembayaran_create_edit','olim_pembayaran_delete',
//     'olim_gelombang_view', 'olim_gelombang_create_edit', 'olim_gelombang_delete',
//     'poster_cabang_view','poster_cabang_create_edit','poster_cabang_delete',
//     'poster_rayon_view','poster_rayon_create_edit','poster_rayon_delete',
//     'poster_peserta_view','poster_peserta_create_edit','poster_peserta_delete',
//     'poster_pengumpulan_view','poster_pengumpulan_create_edit','poster_pengumpulan_delete',
//     'poster_penilaian_view','poster_penilaian_create_edit','poster_penilaian_delete',
//     'poster_test_view','poster_test_create_edit','poster_test_delete',
//     'poster_pembayaran_view','poster_pembayaran_create_edit','poster_pembayaran_delete',
//     'poster_gelombang_view', 'poster_gelombang_create_edit', 'poster_gelombang_delete',
// ];