<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170921113058 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, bname VARCHAR(255) NOT NULL, breleased DATE NOT NULL, blength INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, gname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE relations (id INT AUTO_INCREMENT NOT NULL, book_id INT DEFAULT NULL, genre_id INT DEFAULT NULL, rel_date DATE DEFAULT NULL, INDEX IDX_146CBF7816A2B381 (book_id), INDEX IDX_146CBF784296D31F (genre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, username_canonical VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, email_canonical VARCHAR(180) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) DEFAULT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, confirmation_token VARCHAR(180) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_8D93D64992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_8D93D649A0D96FBF (email_canonical), UNIQUE INDEX UNIQ_8D93D649C05FB297 (confirmation_token), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userbook (id INT AUTO_INCREMENT NOT NULL, book_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_6D98DB4016A2B381 (book_id), INDEX IDX_6D98DB40A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE relations ADD CONSTRAINT FK_146CBF7816A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE relations ADD CONSTRAINT FK_146CBF784296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE userbook ADD CONSTRAINT FK_6D98DB4016A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE userbook ADD CONSTRAINT FK_6D98DB40A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
		
		
        $this->addSql("INSERT INTO book (id, bname, breleased, blength) VALUES (1,'Doctor WithBig Eyes','2016-02-01',200),(2,'Hunger OfMy Town','2016-05-02',10),(3,'Colleagues And Demons','2015-04-06',30),(4,'Humans In The Library','1982-06-15',600),(5,'Founders Of Evil','1530-08-30',900),(6,'Ancestor With Horns','2019-10-10',1000),(7,'Age Of The Light','1923-12-06',234),(8,'Learning With TheRiver','1965-02-02',200),(9,'Lord And Buffoon','2001-07-09',240)");
        $this->addSql("INSERT INTO genre (id, gname) VALUES(1,'Police'),(2,'Comedy'),(3,'Drama'),(4,'Non-fiction'),(5,'Horror'),(6,'Tragedy'),(7,'Children'),(8,'Fiction'),(9,'Satire')");
        $this->addSql("INSERT INTO relations (id, book_id, genre_id, rel_date) VALUES (1,1,1,NULL),(2,2,2,NULL),(3,3,3,NULL),(4,4,4,NULL),(5,4,5,NULL),(6,5,3,NULL),(7,6,3,NULL),(8,7,6,NULL),(9,8,7,NULL),(19,8,8,NULL),(20,9,5,NULL),(21,9,9,NULL)");		
        $this->addSql("INSERT INTO user (id, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, confirmation_token, password_requested_at, roles) VALUES
(1,'admin','admin','admin@fos.com','admin@fos.com',1,NULL,'@HCC@2y@HCC@13@HCC@ML6CGHUzncL41E4xn5XY9.rME7XrbZ8wuChG20F3Glj9kp7MecpkK',NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(2,'user','user','user@fos.com','user@fos.com',1,NULL,'@HCC@2y@HCC@13@HCC@AtvqryKCxyD6JQ/S9pHYleIFfw4CPM5tOWZGzGk/7CoecGBZX4GIe',NULL,NULL,NULL,'a:0:{}');"); 
		$this->addSql("INSERT INTO userbook (id, book_id, user_id) VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,1),(5,5,1),(6,6,1),(7,7,1),(8,8,1),(9,9,1),(16,1,2),(17,2,2),(18,3,2),(19,5,2),(20,6,2),(21,7,2),(22,8,2),(23,9,2)");
		$this->addSql("UPDATE `user` SET password = REPLACE(password,'@HCC@','$');");
		
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE relations DROP FOREIGN KEY FK_146CBF7816A2B381');
        $this->addSql('ALTER TABLE userbook DROP FOREIGN KEY FK_6D98DB4016A2B381');
        $this->addSql('ALTER TABLE relations DROP FOREIGN KEY FK_146CBF784296D31F');
        $this->addSql('ALTER TABLE userbook DROP FOREIGN KEY FK_6D98DB40A76ED395');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE relations');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE userbook');
    }
}
