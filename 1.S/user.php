<?php


class user{

    public function __construct(Logger $logger)
    {

        $this->logger = $logger;

    }


    public function getUserData(){

        try{
            echo "get data from db";
            //get data from db

        }catch(DatabaseException $e){

                $this->logger->log();

        }

    }




}