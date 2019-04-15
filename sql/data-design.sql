drop table if exists `cartProduct`;
drop table if exists cart;
drop table if exists account;
drop table if exists product;


create table account(
	accountId binary(16) not null,
	accountEmail varchar(128) not null,
	accountHash varchar(128) not null,
	UNIQUE (accountEmail),
	primary key (accountId)
);

create table cart(
	cartId binary(16) not null,
	cartAccountId binary(16) not null,
	cartShippingOption varchar(128) not null,
	cartQuantity varchar(128) not null,
	index (cartAccountId),
	foreign key (cartAccountId) references account(accountId),
	primary key (cartId)
);

create table product(
	productId binary(16) not null,
	productPrice varchar(128) not null,
	productDetails varchar(128) not null,
	primary key (productId)
);

create table `cartProduct`(
	cartProductCartId binary(16) not null,
	cartProductProductId binary(16) not null,
	index (cartProductCartId),
	index (cartProductProductId),
	foreign key (cartProductProductId) references product (productId),
	foreign key (cartProductCartId) references cart (cartId),
	primary key (cartProductCartId)
);

