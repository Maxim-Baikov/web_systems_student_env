<?php

use Phinx\Migration\AbstractMigration;

class CreateRequestTable extends AbstractMigration
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
    CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `date_end` date NOT NULL,
  `status` varchar(64) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`,`room_id`),
  KEY `room_id` (`room_id`)
  ADD CONSTRAINT `request_ibfk_1`
  FOREIGN KEY (`client_id`)
  REFERENCES `client` (`id`),
  ADD CONSTRAINT `request_ibfk_2`
  FOREIGN KEY (`room_id`)
  REFERENCES `room` (`id`);
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