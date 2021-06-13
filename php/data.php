<?php
  //include_once "config.php";

  while($row = mysqli_fetch_assoc($sql)) {
    $sql2 = mysqli_query($conn, "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']} 
                                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                                OR outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1");

    $row2 = mysqli_fetch_assoc($sql2);

    if(mysqli_num_rows($sql2) > 0) {
      $result = $row2['msg'];
    } else {
      $result = "No message found.";
    }

    // trimming messages if the words are more than 28
    (strlen($result) > 28) ? $msg = substr($result, 0, 28).'...' : $msg = $result;
    // adding you: text before msg if login id send msg
    ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
    // check if user is online of not
    ($row['status'] == 'Offline now') ? $offline = "offline" : $offline = "";

    $output .= '
      <a href="chat.php?user_id='. $row['unique_id'] .'">
        <div class="content">
          <img src="./uploads/'. $row['img'] .'" alt="">
          <div class="details">
            <span>'. $row['fname'] . " ". $row['lname'] . '</span>
            <p>'. $you. $msg .'</p>
          </div>
        </div>
        <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
      </a>
    ';
  }
?>