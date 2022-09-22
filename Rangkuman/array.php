<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Penerapan Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
<style>
    @font-face {
        font-family: studly;
        src: url('../img/font/Studly\ Regular.ttf') format('truetype');
    }
    .halaman{
        background-color: black;
    }
    .tugas {}
</style>

<body style="background-color: black;">
    <div class="h-screen bg-black halaman">
        <div class="mx-auto text-center justify-center">
            <h1 class="text-4xl font-[studly] pt-10 mb-10  text-white">Penerapan Array dan looping pada PHP</h1>
        </div>
        <div class="w-full max-w-xs mx-auto mt-2">
        </div>
        <div>
        </div>
        <?php
        $myArray[0] = "Teknologi Informasi";
        $myArray[1] = "Fakultas Ilmu Komputer ";
        $myArray[2] = "Universitas Brawijaya ";
        $myArray[3] = "KOTA MALANG ";
        ?>


        <div class="flex bg-black">
            <div class="card bg-black bg-base-100 shadow-xl mx-auto z-10">
                <figure><img src="../img/looping.jpeg" class="w-3/4"  alt=""></figure>
                <div class="card-body bg-black">
                    <h2 class="card-title font-[studly] text-white">Penerapan Array</h2>
                    <p class="text-white">Disini Array Ditulis pada baris ke 34 sampai 38 menggunakan tag php sedangkan looping pada baris ke 40 untuk hasil printnya seperti ini</p>
                    <div class="card-actions justify-end">

                    </div>
                    <h1 class="card-title text-white  text-center justify-center font-[studly] text-sm border "><?php
                                                        for ($i = 0; $i <= 3; $i++) {
                                                            echo "$myArray[$i] <br />";
                                                        }
                                                        ?></h1>
                </div>
            </div>
           
           

        </div>

</body>

</html>