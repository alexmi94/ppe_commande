<?php

    $prix_tablette = 800;
    $prix_pc = 500;
    $prix_portable = 700;
    $tva = 19.5;

    $result_prix_tablettes = $_SESSION["tablettes"] * $prix_tablette;
    $result_prix_pc = $_SESSION["pc"] * $prix_pc;
    $result_portable = $_SESSION["portable"] * $prix_portable; 

    $prix_total_ht = $result_prix_tablettes + $result_prix_pc + $result_portable;
    $prix_tva = $prix_total_ht * $tva / 100;
    $prix_total_ttc = $prix_tva + $prix_total_ht;
?>