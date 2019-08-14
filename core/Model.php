<?php
/**
 *	Model class with main data logic
 */
class Model
{

	//Function connetct to database
	public function connectToDatabase()
	{
		include_once 'etc/config.php';

		$model = new mysqli($db_config['host'], $db_config['user'], $db_config['password'], $db_config['dbname']);
		 $model->query("SET NAMES '{$db_config['coding']}'");
		if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);


		}

		return $model;
	}

// Select all data from current table
	public function selectAllData()
	{
		$connect = $this->connectToDatabase();
		$result = mysqli_query($connect, 'SELECT * FROM ' . static::TABLE_NAME);

		return mysqli_fetch_assoc($result);
	}

// Delete all data from current table
	public function deleteAllData()
	{
		$connect = $this->connectToDatabase();
		if (mysqli_query($connect, 'DELETE FROM ' . static::TABLE_NAME)) {
			return true;
		}

		return false;
	}

// Sql query function
	public function sqlQuery($query)
	{
		$connect = $this->connectToDatabase();
		$result = mysqli_query($connect, $query);

		return $result;
	}

// Sql query function with fetching data
	public function sqlQueryFetch($query)
	{
		$connect = $this->connectToDatabase();
		$result = mysqli_query($connect, $query);

		return mysqli_fetch_assoc($result);
	}

}
