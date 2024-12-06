<div class = "container">
<div class="row">
<div class="col-8">
<h1 class="heading">Questions</h1>
      <?php
      include_once("./common/db.php");
      if (isset($_GET['c-id'])) {
        $query = "select * from questions where category_id = $cid";
      }else if (isset($_GET["u-id"])) {
        $query = "select * from questions where user_id=$uid";
      }else if (isset($_GET["latest"])) {
        $query = "select * from questions order by id desc";
      }else if (isset($_GET["search"])) {
        $query = "select * from questions where `title` like '%$search%'";
      }
       else {
        $query = "select * from questions";
      }
      $result = $conn->query($query);
      foreach ($result as $row) {
        $title = $row['title'];
        $id = $row['id'];
        echo "<div class='row question-list'>
        <h4 class = 'my-question'><a href='?q-id=$id'>$title</a>";
        if (isset($_GET['u-id'])) {
          echo "<a href='./server/requests.php?delete=$id'><h5 class = 'delete'>Delete</h5></a>";
        }else{
          echo NULL;
        }
        echo"</h4></div>";
      }
      ?>
      </div>
      <div class="col-4">
            <?php include('categoryList.php'); ?>
        </div>
      </div>
</div>