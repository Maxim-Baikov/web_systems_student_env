<?php

use Phinx\Migration\AbstractMigration;

class CreateTaskConstraint extends AbstractMigration
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
ALTER TABLE `task` ADD FOREIGN KEY ( `shift_id` ) REFERENCES `webdb`.`shift` (
`id`
) ON DELETE RESTRICT ON UPDATE RESTRICT ;
ALTER TABLE  `floors` ADD FOREIGN KEY (  `id` ) REFERENCES  `webdb`.`task` (
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