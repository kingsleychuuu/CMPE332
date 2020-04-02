create table organization (
	name varchar(40) not null primary key, 
	address varchar (40) not null,
	postalCode char(6) not null,
    phoneNumber char(10),
	type enum("spcaBranch", "rescuer", "shelter") not null
);
	
create table spcabranch (	
	name varchar(40) not null,
  	fee integer,
	foreign key (name) references organization (name) 
);

create table shelter (	
	name varchar(40) not null,
  	fee integer,
	url varchar(40),
    maxDogs numeric(4, 0) not null default 0,
	maxCats numeric(4, 0) not null default 0,
	maxRabbits numeric(4, 0) not null default 0,		
   maxRodents numeric(4, 0) not null default 0,
	foreign key (name) references organization (name) 
);
	
create table rescuer (
	name varchar(40) not null,
	foreign key (name) references organization (name) 
);

create table employee(
	name varchar(40)  not null primary key,
	address varchar(40) not null,
	postalCode char(6) not null,
	phoneNumber char(10),
    isOwner boolean not null default false,
	organizationName varchar(40) not null, 
	foreign key (organizationName) references organization (name) on delete cascade
);	

create table driver(
	name varchar(40) not null primary key,
	phoneNumber char(10) not null,
    plateNumber varchar(7),
	driverLicense varchar(20),
	rescuerName varchar(40), 
	foreign key (rescuerName) references rescuer (name) on delete cascade
);

create table family (
	name varchar(40) not null primary key,
	phoneNumber char(10) not null,
    address char(40) not null
);


create table vetVisit (
	name varchar(40) not null, 
	reason varchar(300) not null, 
	weight integer not null, 
	visitDate date not null,
	animalID integer not null,
	visitID integer not null primary key,
	foreign key (animalID) references animal (id)
);

create table donations (
	donor varchar(40) not null primary key, 
	amount integer not null, 
	donationDate date not null, 
	organizationName varchar(40) not null,
	foreign key (organizationName) references organization (name) 
);


create table animal (
	id integer not null primary key,
	type enum("dog","cat","rabbit","rodent"),
	arrivalDate date not null,
	departureDate date,
	spcaBranchName varchar(40) not null,
	shelterName varchar(40),
	driverName varchar(40),
	familyName varchar(40),
	foreign key (spcaBranchName) references spcaBranch (name),
	foreign key (shelterName) references shelter (name),
	foreign key (driverName) references driver (name),
	foreign key (familyName) references family (name)
);
