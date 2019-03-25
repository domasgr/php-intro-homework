# php-intro-homework

1.Kodėl: Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?
  Dėl naudojamo "Type-hinting" funkcijos parametruose, kuris konvertuoja funkcijos parametrus į šiuo atveju nurodytą int tipą.
  
2.Kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);
  Konkrečiu šio uždavinio atveju funkcija tiesiog išspausdino 6, kadangi ši funkcija buvo importuota iš funkcijų failo į index.php failą. 
  Strict type deklaracija declare(strict_type=1) veikia tik tame faile, kuriame yra deklaruota.
  
