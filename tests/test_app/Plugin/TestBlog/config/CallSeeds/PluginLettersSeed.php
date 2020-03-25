<?php

use Migrations\AbstractSeed;

/**
 * NumbersSeed seed.
 */
class PluginLettersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     */
    public function run()
    {
        $data = [
            [
                'letter' => 'c',
            ],
            [
                'letter' => 'd',
            ],
        ];

        $table = $this->table('letters');
        $table->insert($data)->save();

        $this->call('TestBlog.PluginSubLettersSeed');
    }
}
