<?php

// Include Concorcet Class
require 'Condorcet/lib/Condorcet/Condorcet.php';


	///////////////////


if (!isset($_POST['candidates']) || !isset($_POST['votes']) )
{
	echo json_encode(false) ;
	exit();
}

try
{
	// Create
		$calculator = new Condorcet\Condorcet() ;

		// Candidates
		if (Condorcet\Condorcet::isJson($_POST['candidates']))
		{
			$calculator->jsonCandidates($_POST['candidates']);
		}
		else
		{
			$calculator->parseCandidates($_POST['candidates']);
		}

	// Votes
		if (Condorcet\Condorcet::isJson($_POST['votes']))
		{
			$calculator->jsonVotes($_POST['votes']);
		}
		else
		{
			$calculator->parseVotes($_POST['votes']);
		}

	// Result
		$result = $calculator->getResult( (isset($_POST['method']) ? isset($_POST['method']) : true) );

		echo json_encode($result);
}
catch (Condorcet\CondorcetException $e) 
{
    echo json_encode( array( 'Error' => true, 'ErrorMessage' => $e->getMessage(), 'ErrorCode' => $e->getCode() ) );
}



?>