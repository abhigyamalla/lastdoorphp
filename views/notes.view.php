<?php require "partial/head.php";?>
  <?php require "partial/nav.php";?>
  <?php require "partial/banner.php";?>

  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach($notes as $note):?>
        <li>

        <a href="/lastdoorphp/note.php?id=<?= $note['id']?>" >
      
        <?= $note['note'] ?>
      </a>
      
    </li>

        <?php 
        endforeach
        
        ?>
      
    </div>
  </main>
</div>

    
</body>
</html>