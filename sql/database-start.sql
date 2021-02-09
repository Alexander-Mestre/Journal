/*SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";*/


--CREATE USERS TABLE
--DROP TABLE IF EXISTS users;
CREATE TABLE users (
  userId int UNSIGNED NOT NULL PRIMARY KEY,
  userEmail varchar(60) NOT NULL,
  userPassword varchar(50) NOT NULL,
  userFirstName varchar(50),
  userLastName varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE SEQUENCE user_sq START WITH 1 NOCACHE;

--CREATE ENTRY TABLE
--DROP TABLE IF EXISTS entries;
CREATE TABLE entries (
  entryId int UNSIGNED NOT NULL PRIMARY KEY,
  userId int NOT NULL,
  entryTitle varchar(50) NOT NULL,
  entryText varchar(50),
  enrtyPicture varBinary(max),
  entryDate date NOT NULL,
  enrtyCategoryOne varchar(30),
  enrtyCategoryTwo varchar(30),
  CONSTRAINT fk_entry_1 FOREIGN KEY (`userId`) REFERENCES `users`(`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE SEQUENCE entry_sq START WITH 1 NOCACHE;


--SEED USER TABLE
INSERT INTO users(
   userId
  ,userEmail
  ,userPassword
  ,userFirstName
  ,userLastName
)
VALUES(
   user_sq.Nextval
  ,email@email.com
  ,password123
  ,Peter
  ,Parker
);

--SEED ENTRY TABLE
--1
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Hello World'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,Openrowset( Bulk 'D:\1.jpg', Single_Blob)
  ,'02-06-2021'
  ,'Inspiring'
  ,'Happy'
);

--2
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Vacations on Hawaii'
  ,'I am not unmindful that some of you have come here out of great trials and tribulations. Some of you have come fresh from narrow jail cells. Some of you have come from areas where your quest for freedom left you battered by the storms of persecution and staggered by the winds of police brutality. You have been the veterans of creative suffering. Continue to work with the faith that unearned suffering is redemptive. Go back to Mississippi, go back to Alabama, go back to South Carolina, go back to Georgia, go back to Louisiana, go back to the slums and ghettos of our Northern cities, knowing that somehow this situation can and will be changed.'
  ,Openrowset( Bulk 'D:\2.jpg', Single_Blob)
  ,'01-07-2021'
  ,'Inspiring'
  ,'Happy'
);

--3
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Thinking'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,Openrowset( Bulk 'D:\3.jpg', Single_Blob)
  ,'02-06-2021'
  ,'Inspiring'
  ,'Happy'
);

--4
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'A good Friend'
  ,'I have a dream that one day on the red hills of Georgia, the sons of former slaves and the sons of former slave owners will be able to sit down together at the table of brotherhood.'
  ,Openrowset( Bulk 'D:\4.jpg', Single_Blob)
  ,'12-26-2020'
  ,'Learning'
);

--5
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Goog work'
  ,'This will be the day when all of God''s children will be able to sing with new meaning: My country, ''tis of thee, sweet land of liberty, of thee I sing. Land where my fathers died, land of the pilgrims' 'pride, from every mountainside, let freedom ring.'
  ,Openrowset( Bulk 'D:\5.jpg', Single_Blob)
  ,'11-16-2020'
  ,'Inspiring'
  ,'Happy'
);

--6
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Venting'
  ,'This is our hope. This is the faith that I go back to the South with. With this faith, we will be able to hew out of the mountain of despair a stone of hope. With this faith we will be able to transform the jangling discords of our nation into a beautiful symphony of brotherhood. With this faith we will be able to work together, to pray together, to struggle together, to go to jail together, to stand up for freedom together, knowing that we will be free one day.'
  ,Openrowset( Bulk 'D:\6.jpg', Single_Blob)
  ,'10-15-2020'
  ,'Sad'
);

--7
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'My Mother'
  ,'And they have come to realize that their freedom is inextricably bound to our freedom. We cannot walk alone. And as we walk, we must make the pledge that we shall always march ahead. We cannot turn back.'
  ,Openrowset( Bulk 'D:\7.jpg', Single_Blob)
  ,'09-01-2020'
  ,'Thankful'
);

--8
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'First Things First'
  ,'...to lift our nation from the quick sands of racial injustice to the solid rock of brotherhood. Now is the time to make justice a reality for all of God''s children.'
  ,Openrowset( Bulk 'D:\8.jpg', Single_Blob)
  ,'08-23-2020'
  ,'Inspiring'
  ,'Happy'
);

--9
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Sport Energy'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,Openrowset( Bulk 'D:\9.jpg', Single_Blob)
  ,'07-06-2020'
  ,'Inspiring'
  ,'Happy'
);

--10
INSERT INTO entries(
  ,entryId
  ,userId
  ,entryTitle
  ,entryText 
  ,enrtyPicture
  ,entryDate
  ,enrtyCategoryOne 
  ,enrtyCategoryTwo 
)
VALUES(
   entry_sq.nextval
  ,user_sq.curval
  ,'Fast as Lightning'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,Openrowset( Bulk 'D:\10.jpg', Single_Blob)
  ,'06-13-2020'
  ,'Inspiring'
  ,'Happy'
);