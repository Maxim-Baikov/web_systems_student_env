<?php

use Phinx\Migration\AbstractMigration;

class CreateRoomConstraint extends AbstractMigration
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
ALTER TABLE `room` ADD FOREIGN KEY ( `type` ) REFERENCES `webdb`.`description_room` (
`type`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;
ALTER TABLE  `room` ADD FOREIGN KEY (  `id` ) REFERENCES  `webdb`.`task` (
`link`
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