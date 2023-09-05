# php-test-get-your-games
1. Realized the HTML structure of the website with file inclusion (header, navabar, footer). Added a bit of CSS so it's more readable. 
2. Commented my CSS since my navbar doesn't work 🤡 It should show the connection pop up appear when clicked on the on/off logo, but it doesn't. 
3. Added a few code lines of PHP, to get it show the different titles per page (since I'm usig file inclusion it's way more comfortable). 
4. While making my sign up form, I used Bard AI to help write my SQL query. Also, I went by his solution, then realized it wasn't really what we've seen in class and not really what I was searching for. So I tried with the method of reassigning values to my keys in my array in `$stmt->execute` but realized (too late) that it wasn't keys to an array, so I decided to use the `bindValue()` method. Which still doesn't work. then we worked on sign up forms during class, so then I was able to code something which is usable (yepee!).
5. I then wanted to do my log in. So I did the HTML structure, and went on a google search for a tutorial for the PHP/MySQL connection part. Ended finding one (https://phppot.com/php/user-authentication-using-php-and-mysql/) which was EXACTLY what I needed. Used the third part of the tutorial. I don't really get the `$isSuccess` variable, I'm really clueless about this one. It has a `bindParam` method, I'm currently trying to replace it by a `bindValue` method. Finally ended by using this tutorial (https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php) and everything works! 
6. Added the structure of 'browse-games.php'.
7. Started the HTML form to add games.
8. Developed the foreach to display the games in `browse-games.php` with the help of <a href="https://www.wdb24.com/php-shopping-cart-display-products-from-database/">this</a> tutorial.
9. Added a log out button (i totally forgot about this one until today...).
10. 