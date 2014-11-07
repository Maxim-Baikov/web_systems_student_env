<?php

use Phinx\Migration\AbstractMigration;

class CreateShiftTable extends AbstractMigration
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
CREATE TABLE IF NOT EXISTS `shift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `staff_id` (`staff_id`)
  ADD CONSTRAINT `shift_ibfk_1`
  FOREIGN KEY (`staff_id`)
  REFERENCES `staff` (`id`);
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