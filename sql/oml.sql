insert into account(accountId, accountEmail, accountHash)
values (unhex("1a6e8ac0d8a7402580e6ddadb18fc7f1"), "gamer@george.com", "password");

insert into product(productId, productPrice, productDetails)
values (unhex("7d15be8e8a1a434c93a797ee6ecd969c"), "20", "Bloodborne");

insert into cart(cartId, cartAccountId, cartShippingOption, cartQuantity)
values (unhex("7e36a025cdc7493fa4bea15015ebc1fe"), unhex("1a6e8ac0d8a7402580e6ddadb18fc7f1"), "express", 1);

insert into cartProduct(cartProductCartId, cartProductProductId)
values (unhex(7e36a025cdc7493fa4bea15015ebc1fe), unhex(7d15be8e8a1a434c93a797ee6ecd969c));

select hex(accountId), accountEmail, accountHash from account;