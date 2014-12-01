<?php

class User {

  public function getDisplayName($user_id) {
    $sql = "select display_name from users where user_id = '$user_id'";
    $results = mysql_query($sql);
    $row = mysql_fetch_array($results);
    return $row['display_name'];
  }

  public function getFriends($user_id) {
    $sql = "select friend_id from user_friends where user_id = '$user_id'";
    $results = mysql_query($sql);
    $friends = array();
    while ($row = mysql_fetch_array($results)) {
      $friends[] = $row['friend_id'];
    }
    return $row['display_name'];    
  }

}


?>