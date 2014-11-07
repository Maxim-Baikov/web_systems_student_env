<?php

use Phinx\Migration\AbstractMigration;

class CreateStaffTable extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `post` (`post`)
  ADD CONSTRAINT `staff_ibfk_1`
  FOREIGN KEY (`user_id`)
  REFERENCES `user` (`id`),
  ADD CONSTRAINT `staff_ibfk_2`
  FOREIGN KEY (`post`)
  REFERENCES `post` (`name`);
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