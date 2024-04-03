<?php

namespace Database\Seeders;

use App\Models\Scale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config = [
            ['name'=>'1"','scale'=>12,'common'=>true],
            ['name'=>'G Scale','scale'=>22.5,'common'=>true],
            ['name'=>'G Scale (1:32)','scale'=>32,'common'=>true],
            ['name'=>'G Scale (1:29)','scale'=>29,'common'=>true],
            ['name'=>'1/2" Scale','scale'=>24,'common'=>true],
            ['name'=>'1 Scale','scale'=>32,'common'=>true],
            ['name'=>'O Scale (UK)','scale'=>43.5,'common'=>true],
            ['name'=>'O Scale (EU)','scale'=>45,'common'=>true],
            ['name'=>'O Scale (US)','scale'=>48,'common'=>true],
            ['name'=>'S Scale','scale'=>64,'common'=>true],
            ['name'=>'OO Scale','scale'=>76.2,'common'=>true],
            ['name'=>'HO Scale','scale'=>87,'common'=>true],
            ['name'=>'TT Scale','scale'=>120,'common'=>true],
            ['name'=>'N Scale','scale'=>160,'common'=>true],
            ['name'=>'Z Scale','scale'=>220,'common'=>true],
            ['name'=>'T Scale','scale'=>480,'common'=>true],
            ['name'=>'Grand Scale','scale'=>4,'common'=>false],
            ['name'=>'SE Scale','scale'=>13.71,'common'=>false],
            ['name'=>'3 Gauge','scale'=>22.6,'common'=>false],
            ['name'=>'Wide Gauge (1)','scale'=>26.59,'common'=>false],
            ['name'=>'16mm Scale','scale'=>19.05,'common'=>false],
            ['name'=>'Fn3 Scale','scale'=>20.3,'common'=>false],
            ['name'=>'Fn2 Scale','scale'=>20.3,'common'=>false],
            ['name'=>'11mm Scale','scale'=>22.5,'common'=>false],
            ['name'=>'2 Gauge','scale'=>29,'common'=>false],
            ['name'=>'Static Model','scale'=>35,'common'=>false],
            ['name'=>'L Gauge','scale'=>38,'common'=>false],
            ['name'=>'ScaleSeven','scale'=>43.5,'common'=>false],
            ['name'=>'Proto:48','scale'=>48,'common'=>false],
            ['name'=>'OJ Scale','scale'=>45,'common'=>false],
            ['name'=>'On2 Scale','scale'=>48,'common'=>false],
            ['name'=>'On3 Scale','scale'=>48,'common'=>false],
            ['name'=>'O16.5 Scale','scale'=>43.5,'common'=>false],
            ['name'=>'Oe Scale','scale'=>45,'common'=>false],
            ['name'=>'O-14 Scale','scale'=>43.5,'common'=>false],
            ['name'=>'O-12 Scale','scale'=>43.5,'common'=>false],
            ['name'=>'ZO Scale','scale'=>60,'common'=>false],
            ['name'=>'OO9 Scale','scale'=>76.2,'common'=>false],
            ['name'=>'OO12 Scale','scale'=>76.2,'common'=>false],
            ['name'=>'EM Gauge','scale'=>76.2,'common'=>false],
            ['name'=>'P4 Scale','scale'=>76.2,'common'=>false],
            ['name'=>'Proto87','scale'=>87,'common'=>false],
            ['name'=>'HOn3 1/2','scale'=>87,'common'=>false],
            ['name'=>'HOn3','scale'=>87,'common'=>false],
            ['name'=>'HOE','scale'=>87,'common'=>false],
            ['name'=>'HOn2','scale'=>87,'common'=>false],
            ['name'=>'3mm Scale','scale'=>101.6,'common'=>false],
            ['name'=>'2mm Scale','scale'=>152,'common'=>false],
            ['name'=>'Nn3 Scale','scale'=>160,'common'=>false],
            ['name'=>'ZZ Scale','scale'=>300,'common'=>false],
        ];

        foreach ($config as $scale) {
            Scale::factory()->create([
                $scale['name'],
                $scale['scale'],
                $scale['common'],
            ]);
        }
    }
}
