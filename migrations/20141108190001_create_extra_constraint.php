<?php

use Phinx\Migration\AbstractMigration;

class CreateExtraConstraint extends AbstractMigration
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
      ALTER TABLE `extra` ADD FOREIGN KEY ( `req_id` ) REFERENCES `webdb`.`request` (
      `id`
      ) ON DELETE RESTRICT ON UPDATE RESTRICT ;

      ALTER TABLE `extra` ADD FOREIGN KEY ( `ser_id` ) REFERENCES `webdb`.`services` (
       `id`
       ) ON DELETE RESTRICT ON UPDATE RESTRICT ;
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