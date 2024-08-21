
<?php
function tindakanPemain($jenisZombie) {
    switch ($jenisZombie) {
        case "Regular Zombie":
            echo "Gunakan Peashooter!";
            break;
        case "Conehead Zombie":
            echo "Gunakan Snow Pea!";
            break;
        case "Buckethead Zombie":
            echo "Gunakan Repeater!";
            break;
        case "Newspaper Zombie":
            echo "Gunakan Cherry Bomb!";
            break;
        case "Football Zombie":
            echo "Gunakan Jalapeno!";
            break;
        default:
            echo "Jenis zombie tidak dikenal!";
            break;
    }
}

// Contoh penggunaan
$jenisZombie = "Buckethead Zombie"; // Ganti dengan jenis zombie yang diinginkan
tindakanPemain($jenisZombie);
?>
