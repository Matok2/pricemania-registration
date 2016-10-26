<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161025215014 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql("CREATE TABLE `user` (
                        `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                        `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                        `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                        `enabled` tinyint(1) NOT NULL DEFAULT '1',
                        `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                        `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
                        PRIMARY KEY (`user_id`)
                      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE user');
    }
}
