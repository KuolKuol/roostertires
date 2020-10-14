<?php

/**
 * 
 * Summary
 * Set and display messages
 * 
 * Description
 * This class sets messages and displays them utilizing session variables
 * 
*/

class Message {
    
    /**
     * 
     * @param string $text Text that is to be displayed in the message
     * @param string $type The type of message that is to be displayed (e.g. warning, success, alert ...) 
     * 
     */
    
    public static function setMessage($text,$type){
        if($type == 'error'){
            $_SESSION['errorMessage'] = $text;
        } else {
            $_SESSION['successMessage'] = $text;
        }
    }

    /**
     * Prints out the error message onto the screen using the information from session variables
     */

    public static function displayMessage(){
        if(isset($_SESSION['errorMessage'])){
            echo '<div>'.$_SESSION['errorMessage'].'</div>';
            unset($_SESSION['errorMessage']);
        } 
        
        if(isset($_SESSION['successMessage'])) {
            echo '<div>'.$_SESSION['successMessage'].'</div>';
            unset($_SESSION['successMessage']);
        }
    }

}