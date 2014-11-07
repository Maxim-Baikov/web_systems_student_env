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
  `type` int NOT NULL,
  `link` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `shift_id` (`shift_id`)
  ADD CONSTRAINT `task_ibfk_1`
  FOREIGN KEY (`shift_id`)
  REFERENCES `shift` (`id`);
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