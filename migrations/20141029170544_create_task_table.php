<?php

use Phinx\Migration\AbstractMigration;

class CreateTaskTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
    public function up()
    {
    $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS `task` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `shift_id` int(11) NOT NULL,
      `end` date NOT NULL,
      `type` int(11) NOT NULL,
      `link` int(11) NOT NULL,
      PRIMARY KEY (`id`),
      KEY `shift_id` (`shift_id`),
      KEY `link` (`link`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;
SQL;
      $this->execute($sql); 

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}