<?php

use think\migration\Seeder;

class Comment extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $comment = $this->table('comments');

        $data = [];
        $status = [-1, 1, 9];
        $i = 1;

        while ($i < 30) {
            $data = [
                'post_id' => 24,
                'content' => '123132465',
                'status' => $status[mt_rand(0, count($status) - 1)],
                'create_at' => date('Y-m-d H:i:s'),
            ];
            $comment->insert($data)->save();
            $i++;
        }
    }
}