insert into account(accountId, accountEmail, accountHash)
values (unhex("1a6e8ac0d8a7402580e6ddadb18fc7f1"), "gamer@george.com", "password");

insert into product(productId, productPrice, productDetails)
values (unhex("7d15be8e8a1a434c93a797ee6ecd969c"), "20", "Bloodborne");

insert into cart(cartId, cartAccountId, cartShippingOption, cartQuantity)
values (unhex("7e36a025cdc7493fa4bea15015ebc1fe"), unhex("1a6e8ac0d8a7402580e6ddadb18fc7f1"), 0, 1);

insert into cartProduct(cartProductCartId, cartProductProductId)
values (unhex("7e36a025cdc7493fa4bea15015ebc1fe"), unhex("7d15be8e8a1a434c93a797ee6ecd969c"));


select productId, productPrice, productDetails from product;

update product set productPrice = "30" where productPrice = "20";

delete from cartProduct where cartProductCartId = unhex("7e36a025cdc7493fa4bea15015ebc1fe");

select cartId, cartAccountId, cartShippingOption, cartQuantity from cart
where cartId = unhex ("7e36a025cdc7493fa4bea15015ebc1fe");

select account.accountId, account.accountEmail
from account
inner join cart on account.accountId = cart.cartAccountId
where account.accountEmail = "gamer@george.com";

select likeTweetId, count (*) from tweetId;

