<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'nama' => 'woiii',
        //         'notelp' => '081166554433',
        //         'email'    => 'woi@theempire.com',
        //         'message' => 'lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, '
        //     ],
        //     [
        //         'nama' => 'xeoxxe',
        //         'notelp' => '056166554433',
        //         'email'    => 'xxe@theempire.com',
        //         'message' => 'lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, '
        //     ],
        //     [
        //         'nama' => 'jiwon',
        //         'notelp' => '02346554433',
        //         'email'    => 'kjw@theempire.com',
        //         'message' => 'lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, lorem ip sum sir amet, '
        //     ],

        // ];
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'nama' => $faker->name,
                'notelp' => $faker->phoneNumber,
                'email'    => $faker->email,
                'message' => $faker->text
            ];

            // // Simple Queries
            // $this->db->query("INSERT INTO feedback (nama, notelp, email, message) VALUES(:nama:, :notelp:, :email:, :message:)", $data);

            // Using Query Builder
            $this->db->table('feedback')->insert($data);
        }
    }
}
