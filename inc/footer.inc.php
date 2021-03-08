<footer class="footer mt-auto pt-4 bg-dark">
  <div class="container">
    <p class="text-white text-center">Cours PHP 7 - Date :
        <?php
            setlocale(LC_ALL, 'fr_FR');
            echo strftime("%A %e %B %Y");

            echo ' - ';

            date_default_timezone_set("Europe/Paris");
            echo date('H:i:s');
        ?>
        </p>
  </div>
</footer>

<!-- cf https://www.php.net/manual/fr/function.date.php et https://www.php.net/manual/fr/datetime.format.php -->