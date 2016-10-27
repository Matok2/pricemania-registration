<?php

/*
 * *
 * Pricemania registration test project.
 *
 * @author Matej Kuna <mat.kuna@gmail.com>
 */

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161027204129 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql("ALTER TABLE `user`
CHANGE `username` `firstname` varchar(255) COLLATE 'utf8_unicode_ci' NOT NULL AFTER `user_id`,
ADD `lastname` varchar(255) COLLATE 'utf8_unicode_ci' NOT NULL AFTER `firstname`,
CHANGE `salt` `salt` varchar(255) COLLATE 'utf8_unicode_ci' NULL AFTER `enabled`;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql();
    }
}
