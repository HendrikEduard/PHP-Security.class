# A PHP Security Class
## An OOP class with security functions:  

° A cryptographically secure random length token  
// $_SESSION['secure_token'] = Secure::token();  
// $_COOKIE['secure_token'] = Secure::token();  

° A cryptographically secure random number  
// $secure_rand = Secure::random();  
  
° A secure method to cleanse data prior to inserting into the database  
// Secure::clean($data_to_be_cleansed);  
  
° A secure method to cleanse data coming out of the database  
// Secure::out($data_to_be_cleansed);  
  
A secure method to verify the $id is a number  
// Secure::id($id);  
  
### Either 'require_once'; or autoload this class to initialize it.  
#### If you need a simple autolaoder come ask on:  
https://facebook.com/likeneverbefore.org
