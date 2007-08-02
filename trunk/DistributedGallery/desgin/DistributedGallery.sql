CREATE TABLE GALLERIES (
       GALLERY_ID INT NOT NULL AUTO_INCREMENT
     , NAME VARCHAR(100) NOT NULL
     , BASELOCATION TEXT NOT NULL
     , PRIMARY KEY (GALLERY_ID)
)TYPE=InnoDB;

CREATE TABLE IMAGES (
       IMAGE_ID INT NOT NULL AUTO_INCREMENT
     , FILENAME VARCHAR(512) NOT NULL
     , DESCRIPTION VARCHAR(512)
     , FILESIZE INT
     , GALLERY_ID INT
     , PRIMARY KEY (IMAGE_ID)
     , INDEX (GALLERY_ID)
     , CONSTRAINT FK_IMAGES_1 FOREIGN KEY (GALLERY_ID)
                  REFERENCES GALLERIES (GALLERY_ID)
)TYPE=InnoDB;
