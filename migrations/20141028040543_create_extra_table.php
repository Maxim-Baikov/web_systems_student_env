<?php

use Phinx\Migration\AbstractMigration;

class CreateExtraTable extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `extra` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `req_id` int(11) NOT NULL,
          `ser_id` int(11) NOT NULL,
          PRIMARY KEY (`id`),
          KEY `req_id` (`req_id`),
          KEY `ser_id` (`ser_id`)
          ADD CONSTRAINT `extra_ibfk_1`
          FOREIGN KEY (`req_id`)
          REFERENCES `request` (`id`),
          ADD CONSTRAINT `extra_ibfk_2`
          FOREIGN KEY (`ser_id`)
          REFERENCES `services` (`id`);
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
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