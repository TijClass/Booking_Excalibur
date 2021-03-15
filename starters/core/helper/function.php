<?php
    
    /**
     * setSession
     *
     * @param  mixed $sessionName : Session Name
     * @param  mixed $var         : Value of the Session
     * @return bool
     */
    function setSession($sessionName, $var)
    {
        $_SESSION[$sessionName] = $var;
        return true;
    }
    
    /**
     * getSession
     *
     * @param  mixed $sessionName : Session Name
     * @return void  return the value of Session or false if not exest
     */
    function getSession($sessionName)
    {
        return $_SESSION[$sessionName] ?? false;
    }
?>