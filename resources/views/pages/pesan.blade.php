<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <fieldset>    
        <legend>Pesanan</legend>

        *Makanan <br>
         Pesanan = {{$makanan}} 

            @if($makanan == 'Mie Goreng')
                <br>Harga {{$makanan}} Rp.5000

                @elseif($makanan == 'Lobster')
                <br>Harga {{$makanan}} Rp.20000
    
                @elseif($makanan == 'Pizza')
                <br>Harga {{$makanan}} Rp.50000

                @elseif($makanan == 'Tiramisu')
                <br>Harga {{$makanan}} Rp.30000

                @elseif($makanan == 'Pasta')
                <br>Harga {{$makanan}} Rp.25000
                @endif
  
            <hr>
        *Minuman <br>
        
        Pesanan = {{$minuman}}

            @if($minuman == 'Kopi')
                <br>Harga {{$minuman}} Rp.5000

                 @elseif($minuman == 'Teh Manis')
                <br>Harga {{$minuman}} Rp.20000
    
                @elseif($minuman == 'jus')
                <br>Harga {{$minuman}} Rp.50000
                @endif

  </fieldset>

</body>
</html>