<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 4 PAW</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.28.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <style>
        @font-face {
            font-family: studly;
            src: url('../img/font/Studly\ Regular.ttf') format('truetype');
        }
    </style>
</head>
<body>
<div class="text-center justify-center pt-10  md:h-[20vh] flex ">
        <h1 class="text-3xl text-black font-[studly]">Penerapan Materi Terhadap Konversi Nilai Mahasiswa</h1>
        <a href="../index.html" > <button class="text-black bg-white rounded-lg px-4 py-2  absolute float-right md:right-10">Beranda</button></a>
    </div>
    <form method="POST" class=" " action=" ">
            <div class="m-auto">
                <div class="flex  items-center justify-center text-center m-auto mt-5 bg-white w-96 h-60">
                    <div class="text-center justify-center ">
                        <label class="text-black -" for="nilai">Masukkan Nilai</label> <br>
                        <p class= "text-0.5xl">(Masukkan Nilai range 1-4)</p>
                        <input id="nilai" type="text" name="nilai" placeholder="Nilai" class="input input-bordered input-info w-full max-w-xs" autocomplete="off"/>
                        
                    </div>
                    <div class="absolute mt-44">
                        <button class="btn btn-outline" type="submit" name="register">Cek Indeks Nilai Anda</button>
                    </div>

                </div>
                <h1 class="text-center mt-5">
                <?php
                        
                        if(isset($_POST['register'])){
                        $nilai = $_POST["nilai"];
                        if ($nilai > 3.75 and $nilai <= 4) {
                            echo "Nilai Anda A";
                        } else if ($nilai > 3.25 and $nilai < 3.75) {
                            echo "Nilai Anda B+";
                        } else if ($nilai > 2.74 and $nilai < 3.24) {
                            echo "Nilai Anda B";
                        } else if ($nilai > 2.25 and $nilai < 2.74) {
                            echo "Nilai Anda C+";
                        } else if ($nilai > 1.75 and $nilai < 2.74) {
                            echo "Nilai Anda C";
                        } else if ($nilai > 1.25 and $nilai < 1.74) {
                            echo "Nilai Anda D+";
                        } else if ($nilai > 0.75 and $nilai < 1.23) {
                            echo "Nilai Anda D";
                        } else if ($nilai < 0.25) {
                            echo "Nilai Anda E";
                        } else {
                            echo "Nilai Tidak Tersedia";
                        }
                    }
                        ?>
                </h1>
                
            </div>
        </form>
</body>
</html>
