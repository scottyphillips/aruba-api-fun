<?php
use App\RejectedAuths;
use Illuminate\Database\Seeder;

class RejectedAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
       $hostnames = ['AC1KOK01', 'AC2EDN02', 'AC3VBM03'];
       $ports = ['ge-0/0/1', 'ge-0/0/2', 'ge-0/0/3'];
       $mac_address = ['AA-BB-CC-DD-EE-FF', 'A1-B2-C3-D4-E5-F6', 'AB-CD-EF-12-34-56'];
       for ($i = 0; $i < 10; $i++){
         RejectedAuths::create([
           'switch_id' => $hostnames[array_rand($hostnames)],
           'port' =>  $ports[array_rand($ports)],
           'mac_address' => $mac_address[array_rand($mac_address)]
         ]);
       }
    }
}
