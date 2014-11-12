<?php

use Phinx\Migration\AbstractMigration;

class CreateShiftConstraint extends AbstractMigration
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
ALTER TABLE `shift` ADD FOREIGN KEY ( `staff_id` ) REFERENCES `webdb`.`staff` (
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