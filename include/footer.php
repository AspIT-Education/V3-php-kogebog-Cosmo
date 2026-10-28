<footer class="bg-success-subtle py-3">
    <p class="text-center">&copy; 2025 Moster Hannes Køkkenfiflerier</p>

    <p class="text-center"> 
        <?= date("d"); ?> 
        <?php
        $danishMonths = array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","Aug","Sep","Okt","Nov","Dec");
        echo $danishMonths[date("n") - 1]; 
        ?> 
        <?= date("Y"); ?> 
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>