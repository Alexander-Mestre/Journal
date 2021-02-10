DROP TABLE IF EXISTS users;
CREATE TABLE users (
  userId int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userEmail varchar(60) NOT NULL,
  userPassword varchar(50) NOT NULL,
  userFirstName varchar(50),
  userLastName varchar(50)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS entries;
CREATE TABLE entries (
  entryId int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userId int UNSIGNED NOT NULL,
  entryTitle varchar(50) NOT NULL,
  entryText varchar(10000),
  entryPicture varchar(50),
  entryDate date NOT NULL,
  entryCategoryOne varchar(30),
  entryCategoryTwo varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO users(
   userEmail
  ,userPassword
  ,userFirstName
  ,userLastName
)
VALUES(
   'email@email.com'
  ,'password123'
  ,'Peter'
  ,'Parker'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Hello World'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,'/Journal/images/1.jpg'
  , '2021-02-06'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
   1
  ,'Vacations on Hawaii'
  ,'I am not unmindful that some of you have come here out of great trials and tribulations. Some of you have come fresh from narrow jail cells. Some of you have come from areas where your quest for freedom left you battered by the storms of persecution and staggered by the winds of police brutality. You have been the veterans of creative suffering. Continue to work with the faith that unearned suffering is redemptive. Go back to Mississippi, go back to Alabama, go back to South Carolina, go back to Georgia, go back to Louisiana, go back to the slums and ghettos of our Northern cities, knowing that somehow this situation can and will be changed.'
  ,'/Journal/images/2.jpg'
  ,'2021-02-07'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Thinking'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  , '/Journal/images/3.jpg'
  ,'2021-01-08'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'A good Friend'
  ,'I have a dream that one day on the red hills of Georgia, the sons of former slaves and the sons of former slave owners will be able to sit down together at the table of brotherhood.'
  , '/Journal/images/4.jpg'
  ,'2020-12-26'
  ,'Learning'
  ,NULL
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Goog work'
  ,'This will be the day when all of God''s children will be able to sing with new meaning: My country, ''tis of thee, sweet land of liberty, of thee I sing. Land where my fathers died, land of the pilgrims' 'pride, from every mountainside, let freedom ring.'
  ,'/Journal/images/5.jpg'
  ,'2020-11-16'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Venting'
  ,'This is our hope. This is the faith that I go back to the South with. With this faith, we will be able to hew out of the mountain of despair a stone of hope. With this faith we will be able to transform the jangling discords of our nation into a beautiful symphony of brotherhood. With this faith we will be able to work together, to pray together, to struggle together, to go to jail together, to stand up for freedom together, knowing that we will be free one day.'
  ,'/Journal/images/6.jpg'
  ,'2020-10-15'
  ,'Sad'
  ,NULL
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'My Mother'
  ,'And they have come to realize that their freedom is inextricably bound to our freedom. We cannot walk alone. And as we walk, we must make the pledge that we shall always march ahead. We cannot turn back.'
  ,'/Journal/images/7.jpg'
  ,'2020-09-01'
  ,'Thankful'
  ,NULL
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'First Things First'
  ,'...to lift our nation from the quick sands of racial injustice to the solid rock of brotherhood. Now is the time to make justice a reality for all of God''s children.'
  ,'/Journal/images/8.jpg'
  ,'2020-08-23'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
   userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Sport Energy'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,'/Journal/images/9.jpg'
  ,'2020-07-06'
  ,'Inspiring'
  ,'Happy'
);


INSERT INTO entries(
  userId
  ,entryTitle
  ,entryText 
  ,entryPicture
  ,entryDate
  ,entryCategoryOne 
  ,entryCategoryTwo 
)
VALUES(
  1
  ,'Fast as Lightning'
  ,'We refuse to believe that there are insufficient funds in the great vaults of opportunity of this nation. And so we''ve come to cash this check, a check that will give us upon demand the riches of freedom and the security of justice.'
  ,'/Journal/images/10.jpg'
  ,'2020-06-13'
  ,'Inspiring'
  ,'Happy'
);