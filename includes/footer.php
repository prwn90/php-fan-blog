        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description; ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
      <?php if($categories) : ?>
            <ol class="list-unstyled">
        <?php while($row = $categories->fetch_assoc()) : ?>
          <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
        <?php endwhile; ?>
            </ol>
      <?php else : ?>
        <p>There are no categories yet</p>
      <?php endif; ?>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


    <footer class="blog-footer">
      <p>Blog Copyright &copy; 2019 prwn90</a>.</p>
      <p>
        <a href="#" class="top">⬆ TOP ⬆</a>
      </p>
    </footer>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.js"></script>
  </body>
</html>
