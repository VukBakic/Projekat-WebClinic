<div class="section-title">
    <h2>Postavite nam pitanje</h2>
    <p>
        Postavite pitanje nekom od naših lekara specijalista. Na Vaša
        pitanja se trudimo da odgovorimo u najkraćem roku. Takodje pitanja
        drugih korsinika kao i odgovore naših lekara možete pogledati ispod.
    </p>
    <?php
    $authorization = service("authorization");
    if ($authorization->isKlijent())
        echo '<a href = "klijent/pitaj" class = "btn-cstm">Postavite pitanje</a>';
    else
        echo '<a href = "gost/pitaj" class = "btn-cstm">Postavite pitanje</a>';
    ?>


</div>
