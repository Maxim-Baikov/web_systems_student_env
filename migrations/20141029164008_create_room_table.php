<?php

use Phinx\Migration\AbstractMigration;

class CreateRoomTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
     * public function change()
     * {
     * }
     */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $sql = <<<SQL
    CREATE TABLE IF NOT EXISTS `room` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `type` int(11) NOT NULL,
      `number` int(11) NOT NULL,
      PRIMARY KEY (`id`),
      KEY `type` (`type`)
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