<?php
/*
* @package   	PDQ (Pretty 'n' Damn Quick) PHP Toolkit
* @version    4.2
* @author     Hendrik Eduard Kuiper
* @copyright  Hendrik Eduard Kuiper
* @link       
* @copyright 	Copyright (c) 2006 - 2019
* @license 		http://opensource.org/licenses/MIT	MIT License
* @since 			Version 1
* Copyright (c) 2006 - 2019 Hendrik Eduard Kuiper
* 
* MIT License 
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
* IN THE SOFTWARE.
*/
class Secure {
  
  // Cryptographically secure random length random token
  // for session tokens, cookies and CSRF protection for forms
  public static function token() {
    $token = bin2hex(random_bytes(37));
    return $token;
  } // $_SESSION['secure_token'] = Secure::token();

  // Cryptographically secure random number
  public static function random() {
      return bin2hex(random_bytes(22));
  } // $secure_rand = Secure::random();

  // Clean data going into the DB
  public static function clean($data) {
    $data = strip_tags($data);
    $data = stripslashes($data);
    return trim(htmlentities($data, ENT_QUOTES, 'UTF-8'));  
  } // Secure::clean($data);

  // Data coming out of the DB
  public static function out($data) {
    return trim(htmlentities($data, ENT_QUOTES, 'UTF-8'));
  } // Secure::out($data);
  
   // Validate ID
   public static function id($id) {
    if (filter_var($id, FILTER_VALIDATE_INT) !== 0 && 
        filter_var($id, FILTER_VALIDATE_INT)) {
        return true;
    } else { die("An error occured, please try again later");}
  } // Secure::id($id)

}



