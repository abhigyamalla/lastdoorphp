<?php require "partial/head.php";?>
  <?php require "partial/nav.php";?>
  <?php require "partial/banner.php";?>

  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach($notes as $note):?>
        <ul>
        <li>

            <a href="/lastdoorphp/note.php?id=<?= $note['id']?>" >

            <?= htmlspecialchars($note['note'])  ?>
            </a>


          </li>

        </ul>
        

        <?php 
        endforeach;
        
        ?>

        <p class="mt-5">
          <a href="/lastdoorphp/notes.php/create"class="text-blue-500 hover:underline">Create Note</a>
        </p>
      
    </div>
  </main>
</div>

    
</body>
</html>