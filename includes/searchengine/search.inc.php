<ul class="list-unstyled msg_list">
    <?php
        if (isset ($_GET['search_text'])) {
        $search_text = $_GET['search_text'];
        }

        if (!empty($search_text)) {
            if($connect = mysqli_connect('localhost', 'root', 'Jayluv3139', 'newsite' )) {
            $query = "SELECT * FROM `users` JOIN `shops` ON `users`.`user_id`=`shops`.`user_id`  WHERE `shopname` LIKE '%".mysqli_real_escape_string($connect, $search_text)."%' LIMIT 8 ";
            $query_run = mysqli_query($connect, $query);

            while($query_row = mysqli_fetch_assoc($query_run)) {
                ?>
                <li style="padding-left:20px;">
                    <a href="<?php echo $query_row['typeofbusiness']; ?>/<?php echo $query_row['user_name']; ?>">
                        <span class="image">
                            <img src="<?php echo $query_row['profileimage']; ?>" alt="<?php echo $businesscycle->user; ?>" style="background:#000000;" /></span>
                        <span>
                            <?php echo $query_row['user_name']; ?>
                        </span>
                        <span class="message">
                            <?php echo $query_row['shopname']; ?>
                        </span>
                    </a>
                </li>
                <?php
                }
            }
        }
    ?>
</ul>

