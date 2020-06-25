<!-- Try to add API but not working -->
<?php
  include "conf/info.php";
  $title="Welcome to";
?>
    <h1>~ Top Rated Movies ~</h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_toprated.php";
        foreach($toprated->results as $p){
          echo '<li><a href="movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " |  Vote : " . $p->vote_count . "</em></h5></a></li>";
        }
      ?>
    </ul>

  <h2><?php echo $sitename ?></h3>
  <p>Copyright &copy; 2016 - developed by <a href="http://juniordev.net">JuniorDev</a></p>
</body>
</html>
?>