CREATE TABLE bank
 (
  id int NOT NULL auto_increment,
  customer varchar(25) NOT NULL,
  email varchar(20) NOT NULL,
  bank_id int(3) NOT NULL,
  bank_acct int (10) NOT NULL,
  balance int (8) NOT NULL,
  primary key (id)
);
