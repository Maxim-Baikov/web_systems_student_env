<?php

use Phinx\Migration\AbstractMigration;

class CreateStaffConstraint extends AbstractMigration
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
ALTER TABLE `staff` ADD FOREIGN KEY ( `user_id` ) REFERENCES `webdb`.`user` (
`id`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;

ALTER TABLE `staff` ADD FOREIGN KEY ( `post` ) REFERENCES `webdb`.`post` (
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