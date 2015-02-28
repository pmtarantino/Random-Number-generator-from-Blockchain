# Random Number generator from Blockchain

An useless random number generator from blockchain, using (blockchain.info)

If you are not happy with the rand() in PHP, now you can use the entropy from the blockchain and get your random numbers from there!

## How to use it

Include `randombc.php` (or just copy the function into your code) and call `RandomBC()`.

The default length for the returned number is 10, but you can change it with the first parameter of the function.

## Notice

This is just a simple excercise and shouldn't be used in production. I didn't test the randomness of the generator, plus it is very slow, because each number has to make a request to (blockchain.info). 