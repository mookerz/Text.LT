<?php
$mysqli = new mysqli("a2plcpnl0564.prod.iad2.secureserver.net", "gterm_text_lt_ad", "fj2#zx.sS2@p", "gterm_text_lt");
$mysqli->set_charset("utf8");
if ($mysqli->connect_errno) {
    die( "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}




function didCurrentUserCreateTooManyNotes($userID, $mysqli){
    $sqlTemp = "SELECT count(*) as ct FROM `gterm_text_lt`.`notes` where userID = '". $userID ."'";
    $result = $mysqli->query($sqlTemp);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return $row["ct"]>500;
        }
    } else {
       return false;
    }

    return false;
}

function isCurrentUserOwnCurerntPage($userID, $pageID, $mysqli){
    $pageID = (int)$pageID ;
    if($pageID > 0 ){
        $stmt = $mysqli->prepare("SELECT noteContent FROM `gterm_text_lt`.`notes` where userID = ? ; ");
        $stmt->bind_param('s' , $_SESSION['userID']);
        if($stmt->execute()){
            $stmt->bind_result($noteContent);
            //TODO: Grab single note record
            while ($stmt->fetch()) {
                printf ("%s \n ", $noteContent);
            }
        }


        die( );

    }

    return false;
}

?>