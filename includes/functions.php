<?php
function connectToDB()
{
    return new PDO(
        'mysql:host=devkinsta_db;dbname=simple_store_01', // instruction: change the host to devkinsta_db and insert your own database name
        'root',
        'WaoDc0cvoNR1eUiM' // instruction: change this to your database password
    );
}